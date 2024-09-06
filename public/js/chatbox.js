// Load Pusher and Laravel Echo
var pusher = new Pusher("eaecfdbcb5ca2fba8266", {
    cluster: "ap1",
    encrypted: true,
});

var channel = pusher.subscribe("chat-channel");
channel.bind("new-message", function (data) {
    const chatBox = document.getElementById("chat-box");
    const message = data.message.message;
    const username = data.message.username;

    // Determine if the message is from the sender or receiver
    const messageClass = username === "Admin" ? "receiver" : "sender";

    chatBox.innerHTML +=
        '<div class="chat-message ' +
        messageClass +
        '"><strong>' +
        username +
        ":</strong> " +
        message +
        "</div>";
});

// Toggle chatbox visibility
document.getElementById("chat-icon").addEventListener("click", toggleChatbox);
document.getElementById("chat-header").addEventListener("click", toggleChatbox);

function toggleChatbox() {
    const chatboxContainer = document.getElementById("chatbox-container");
    chatboxContainer.classList.toggle("show");
}

// Send message
document.getElementById("chat-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const username = document.getElementById("username").value || "Guest";
    const message = document.getElementById("message").value;
    fetch("/send-message", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify({
            username: username,
            message: message,
        }),
    });

    document.getElementById("message").value = "";
});
