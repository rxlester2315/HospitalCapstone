<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@latest/dist/echo.iife.js"></script>

<script>
// Toggle chatbox visibility
function toggleChatbox() {
    const chatIcon = document.getElementById('chat-icon');
    const chatbox = document.getElementById('chatbox');

    if (chatbox.classList.contains('active')) {
        chatbox.classList.remove('active');
        chatbox.style.display = 'none';
        chatIcon.style.display = 'block';
    } else {
        chatbox.classList.add('active');
        chatbox.style.display = 'flex';
        chatIcon.style.display = 'none';
    }
}

// Real-time chat functionality
Pusher.logToConsole = true;

var pusher = new Pusher('eaecfdbcb5ca2fba8266', {
    cluster: 'ap1'
});

var channel = pusher.subscribe('chat-channel');
channel.bind('new-message', function(data) {
    const chatBox = document.getElementById('chat-box');
    const message = data.message.message; // Extract the actual message text
    const username = data.message.username; // Extract the username
    chatBox.innerHTML += '<p><strong>' + username + ':</strong> ' + message + '</p>';
});

document.getElementById('chat-form').addEventListener('submit', function(e) {
    e.preventDefault();

    // Get the message input and trim whitespace
    const messageInput = document.getElementById('message');
    const message = messageInput.value.trim(); // Trim to remove whitespace

    // Check if the message is empty
    if (message === "") {
        alert("Please enter a message before sending.");
        return; // Exit the function without sending the message
    }

    const username = 'Admin';
    fetch('/send-message', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            username: username,
            message: message
        })
    });

    // Clear the input field
    messageInput.value = '';
});
</script>