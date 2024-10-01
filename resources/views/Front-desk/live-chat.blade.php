<!DOCTYPE html>
<html>

<head>
    <title>Front DeskChat</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js"></script>
    <style>
    /* Basic styling */
    #container {
        display: flex;
    }

    #user-list {
        width: 25%;
        border-right: 1px solid #ccc;
        padding: 10px;
    }

    #chatbox {
        width: 75%;
        padding: 10px;
    }

    #messages {
        border: 1px solid #ccc;
        height: 300px;
        overflow-y: scroll;
        padding: 10px;
    }

    #message {
        width: 100%;
        height: 50px;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    ul li {
        padding: 10px;
        cursor: pointer;
    }

    ul li:hover {
        background-color: #f0f0f0;
    }
    </style>
</head>

<body>

    <h1>Chat with <span id="chat-with">Select a user</span> (User ID: <span id="user-id">{{ auth()->id() }}</span>)</h1>
    <a href="{{url('Front')}}">
        <h3 class="btn btn-primary">Back</h3>
    </a>
    <div id="container">
        <div id="user-list">
            <h3>Active Chats</h3>
            <ul>
                @foreach($chatSessions as $session)
                <li onclick="loadChat({{ $session->id }}, '{{ addslashes($session->user->name) }}')">
                    {{ $session->user->name }}</li>
                @endforeach
            </ul>
        </div>

        <div id="chatbox">
            <h1>Chat with <span id="chat-with">Select a user</span></h1>
            <div id="messages"></div>
            <textarea id="message" placeholder="Type your message..."></textarea>
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
    let currentSessionId = null;
    let currentUserId = null;
    let channel = null;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const pusher = new Pusher('{{ env("PUSHER_APP_KEY") }}', {
        cluster: '{{ env("PUSHER_APP_CLUSTER") }}',
        encrypted: true
    });

    function loadChat(sessionId, userName) {
        currentSessionId = sessionId;
        $('#chat-with').text(userName);
        $('#messages').empty();

        if (channel) {
            pusher.unsubscribe('chat.' + channel);
        }

        channel = pusher.subscribe('chat.' + sessionId);
        channel.bind('chat-message', function(data) {
            const safeMessage = DOMPurify.sanitize(data.message.message);
            $('#messages').append('<p><strong>' + (data.message.from_admin ? 'You' : userName) + ':</strong> ' +
                safeMessage + '</p>');
        });

        $.get('/admin/chat/' + sessionId + '/messages', function(data) {
            currentUserId = data.user_id;
            data.messages.forEach(function(message) {
                const safeMessage = DOMPurify.sanitize(message.message);
                $('#messages').append('<p><strong>' + (message.from_admin ? 'You' : userName) +
                    ':</strong> ' + safeMessage + '</p>');
            });
        });
    }

    function sendMessage() {
        const message = $('#message').val();
        if (message.trim() === '' || !currentSessionId || !currentUserId) {
            alert('Please select a user and enter a message.');
            return;
        }

        $.ajax({
            type: 'POST',
            url: '/admin/chat/' + currentSessionId + '/send',
            data: {
                message: message.replace(/</g, "&lt;").replace(/>/g, "&gt;"), // Server-side escaping
                user_id: currentUserId
            },
            success: function() {
                $('#message').val('');
            },
            error: function(error) {
                console.error(error);
            }
        });
    }
    </script>

</body>

</html>