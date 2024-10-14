<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Interface</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.0/purify.min.js"></script>

 <link rel="stylesheet" href="main_alls/everythingzz/assets/csss/styles.css">

    <style>
        /* Basic Reset */


    </style>
</head>
<body>
     <div class="chat-container">
        <div class="chat-list" id="user-list">
            <h3>Active Chats</h3>
            <ul >
                @foreach($chatSessions as $session)
                <li  class="namess"onclick="loadChat({{ $session->id }}, '{{ addslashes($session->user->name) }}')">
               <img  src="main_alls/everythingzz/assets/csss/images/111.jpg" alt="">

                    <p>{{ $session->user->name }}</p></li>
                @endforeach

            </ul>
         
        </div>

        <div class="chat-window" id="chatbox">
            <div class="chat-header">
                <h1>Comcare Front Desk Chat</h1>

                <div class="other-tabs">
                    <ul>
                       <a href="{{url('Front')}}">
                         <li>Home</li>
                       </a>
                        <a href="{{url('unverified-list')}}" target="_blank">
                             <li>Account Verified Request</li>
                        </a>
                       <a href="{{url('unverified')}}" target="_blank">
                           <li>Unverified Account</li>
                       </a>
                    </ul>
                </div>
            </div>
            <div class="chat-messages" id="messages">
                <!-- Messages will be dynamically loaded here -->
            </div>
            <div class="chat-input">
                <textarea id="message" placeholder="Type your message..."></textarea>
                <button class="send-btn" onclick="sendMessage()">Send</button>
            </div>
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

        // Highlight the active chat in the user list
        $('#user-list li').removeClass('active'); // Remove the active class from all list items
        $('#user-list li').filter(function() {
            return $(this).text().trim() === userName;
        }).addClass('active'); // Add the active class to the current chat

        if (channel) {
            pusher.unsubscribe('chat.' + channel);
        }

        channel = pusher.subscribe('chat.' + sessionId);
        channel.bind('chat-message', function(data) {
            const safeMessage = DOMPurify.sanitize(data.message.message);
            const messageClass = data.message.from_admin ? 'sent' : 'received';
            $('#messages').append('<div class="message ' + messageClass + '"><p>' + safeMessage + '</p></div>');

            // If the message is from the user, highlight their name in the chat list
            if (!data.message.from_admin) {
                $('#user-list li').filter(function() {
                    return $(this).text().trim() === userName;
                }).addClass('highlight'); // Add a 'highlight' class when the user sends a message
                console.log('Highlight added to user: ' + userName);
            }
        });

        $.get('/admin/chat/' + sessionId + '/messages', function(data) {
            currentUserId = data.user_id;
            data.messages.forEach(function(message) {
                const safeMessage = DOMPurify.sanitize(message.message);
                const messageClass = message.from_admin ? 'sent' : 'received';
                $('#messages').append('<div class="message ' + messageClass + '"><p>' + safeMessage + '</p></div>');
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

                // Change the color of the user's name to indicate they sent a message
                $('#user-list li').filter(function() {
                    return $(this).text().trim() === $('#chat-with').text().trim();
                }).addClass('user-sent-message'); // Add a 'user-sent-message' class to the active chat
                console.log('User-sent-message class added to: ' + $('#chat-with').text().trim());
            },
            error: function(error) {
                console.error(error);
            }
        });
    }
</script>

</body>
</html>
