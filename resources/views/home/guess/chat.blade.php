<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>User Chat</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js"></script>

    <style>
    /* General layout */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f5f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* Main chat layout */
    .chat-wrapper {
        width: 90%;
        height: 80%;
        display: flex;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    /* Sidebar with chat title or user profile */
    .chat-sidebar {
        width: 30%;
        background-color: #007bff;
        padding: 30px;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .chat-sidebar h2 {
        font-size: 32px;
        font-weight: bold;
        margin: 0;
        margin-bottom: 20px;
    }

    /* Chat main area */
    .chat-main {
        width: 70%;
        display: flex;
        flex-direction: column;
        background-color: #f0f5f9;
        padding: 20px;
        position: relative;
    }

    /* Chat messages area */
    #messages {
        flex-grow: 1;
        overflow-y: auto;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #messages p {
        margin: 10px 0;
        padding: 12px;
        border-radius: 10px;
        max-width: 60%;
        clear: both;
        position: relative;
    }

    /* Admin messages (left side, gray) */
    #messages p.admin-message {
        background-color: #e0e0e0;
        color: black;
        align-self: flex-start;
        float: left;
    }

    /* User messages (right side, blue) */
    #messages p.user-message {
        background-color: #007bff;
        color: white;
        align-self: flex-end;
        float: right;
    }

    /* Input area */
    .chat-input {
        display: flex;
        border-radius: 10px;
        overflow: hidden;
        background-color: white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #message {
        flex-grow: 1;
        padding: 20px;
        border: none;
        font-size: 16px;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 15px 30px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }

    /* Scrollbar styling */
    #messages::-webkit-scrollbar {
        width: 10px;
    }

    #messages::-webkit-scrollbar-thumb {
        background-color: #007bff;
        border-radius: 10px;
    }
    </style>
</head>

<body>

    <div class="chat-wrapper">
        <div class="chat-sidebar">
            <h2>Chat with Admin</h2>
            <p><strong>Patient Info:</strong></p>
            <p>Name: John Doe</p>
        </div>

        <div class="chat-main">
            <div id="messages"></div>
            <div class="chat-input">
                <textarea id="message" placeholder="Type your message..."></textarea>
                <button onclick="sendMessage()">Send</button>
            </div>
        </div>
    </div>

    <script>
    Pusher.logToConsole = true;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const pusher = new Pusher('{{ env("PUSHER_APP_KEY") }}', {
        cluster: '{{ env("PUSHER_APP_CLUSTER") }}',
        encrypted: true
    });

    const channel = pusher.subscribe('chat.{{ $chatSession->id }}');

    channel.bind('chat-message', function(data) {
        if (data.message && typeof data.message.from_admin !== 'undefined') {
            const safeMessage = DOMPurify.sanitize(data.message.message);
            const messageClass = data.message.from_admin ? 'admin-message' : 'user-message';
            $('#messages').append('<p class="' + messageClass + '">' + safeMessage + '</p>');
            $('#messages').scrollTop($('#messages')[0].scrollHeight);
        }
    });

    function sendMessage() {
        const message = $('#message').val();
        if (message.trim() === '') {
            alert('Please enter a message.');
            return;
        }

        $.ajax({
            type: 'POST',
            url: '/user/chat/{{ $chatSession->id }}/send',
            data: {
                message: message.replace(/</g, "&lt;").replace(/>/g, "&gt;") // Server-side escaping
            },
            success: function() {
                $('#message').val(''); // Clear the input
            },
            error: function(error) {
                console.error(error);
            }
        });
    }

    $(document).ready(function() {
        $.get('/user/chat/{{ $chatSession->id }}/messages', function(data) {
            data.messages.forEach(function(message) {
                const safeMessage = DOMPurify.sanitize(message.message);
                const messageClass = message.from_admin ? 'admin-message' : 'user-message';
                $('#messages').append('<p class="' + messageClass + '">' + safeMessage +
                    '</p>');
            });
            $('#messages').scrollTop($('#messages')[0].scrollHeight);
        });
    });
    </script>

</body>

</html>