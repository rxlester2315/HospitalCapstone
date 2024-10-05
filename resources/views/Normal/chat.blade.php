<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Doctor</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        #chat-container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        #chat-box {
            height: 400px;
            padding: 20px;
            overflow-y: auto;
            background-color: #f9f9f9;
            border-bottom: 1px solid #ddd;
        }

        .message {
            margin-bottom: 15px;
        }

        .message strong {
            color: #2c3e50;
            display: block;
            margin-bottom: 5px;
        }

        .message.you {
            text-align: right;
        }

        .message.you strong {
            color: #3498db;
        }

        .message.doctor strong {
            color: #e74c3c;
        }

        .chat-form {
            display: flex;
            padding: 15px;
            background-color: #ffffff;
        }

        .chat-form textarea {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
            resize: none;
            font-size: 14px;
            margin-right: 10px;
        }

        .chat-form button {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .chat-form button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

    <center>
        <h1>Chat with my Doctor</h1>
    </center>

    <div id="chat-container">
        <div id="chat-box">
            <!-- Messages will appear here -->
        </div>

        @foreach($appointments as $appointment)
        <form class="chat-form">
            @csrf
            <input type="hidden" name="doctor_id" value="{{ $appointment->doctor->id }}">
            <textarea name="message" placeholder="Type your message here..." required></textarea>
            <button type="submit">Send</button>
        </form>
        @endforeach
    </div>

  <script>
    // Initialize Pusher
    var pusher = new Pusher('{{ env("PUSHER_APP_KEY") }}', {
        cluster: '{{ env("PUSHER_APP_CLUSTER") }}',
        forceTLS: true
    });

    // Subscribe to the same chat channel
    var channel = pusher.subscribe('chat-channel');

    // Get the current user's name from Laravel
    var currentUserName = "{{ auth()->user()->name }}"; // Assuming you have a 'name' attribute

    // Listen for messages from the doctor
    channel.bind('message-sent', function (data) {
        if (data.to == {{ auth()->user()->id }}) {
            let chatBox = document.getElementById('chat-box');
            let newMessage = `<div class="message doctor"><strong>${data.doctor_name || "Doctor"}:</strong> ${data.message}</div>`;
            chatBox.innerHTML += newMessage;
            chatBox.scrollTop = chatBox.scrollHeight; // Scroll to bottom when new message arrives
        }
    });

    // Handle form submission for each chat form
    document.querySelectorAll('.chat-form').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent the form from submitting the default way

            let message = form.querySelector('textarea[name="message"]').value;
            let doctorId = form.querySelector('input[name="doctor_id"]').value;

            // Send message to server via AJAX
            $.ajax({
                url: '{{ route("patient.sendmessage") }}', // URL for the POST route
                type: 'POST',
                data: {
                    message: message,
                    doctor_id: doctorId,
                    _token: '{{ csrf_token() }}' // CSRF Token
                },
                success: function (response) {
                    // Clear message field
                    form.querySelector('textarea[name="message"]').value = '';

                    // Optionally display the message in the chat-box
                    let chatBox = document.getElementById('chat-box');
                    let newMessage = `<div class="message"><strong>${currentUserName}:</strong> ${message}</div>`; // Use currentUserName
                    chatBox.innerHTML += newMessage;
                    chatBox.scrollTop = chatBox.scrollHeight; 
                },
                error: function (xhr) {
                    alert('Error sending message.');
                }
            });
        });
    });
</script>


</body>

</html>
