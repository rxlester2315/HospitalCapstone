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

        #navbar {
            background-color: #3498db;
            color: white;
            padding: 15px;
            text-align: center;
        }

        #chat-container {
            display: flex;
            max-width: 900px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        #doctor-list {
            width: 200px;
            border-right: 1px solid #ddd;
            padding: 15px;
        }

        #chat-box {
            flex-grow: 1;
            height: 400px;
            padding: 20px;
            overflow-y: auto;
            background-color: #f9f9f9;
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

        select {
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
    </style>
</head>

<body>

    <div id="navbar">
        <h1>Chat with my Doctor</h1>
    </div>

    <div id="chat-container">
        <div id="doctor-list">
            <h3>My Doctors</h3>
            <select id="doctor-select">
                @foreach($appointments as $appointment)
                    <option value="{{ $appointment->doctor->id }}">{{ $appointment->doctor->name }}</option>
                @endforeach
            </select>
        </div>

        <div id="chat-box">
            <!-- Messages will appear here -->
        </div>
    </div>

    <form class="chat-form">
        @csrf
        <input type="hidden" name="doctor_id" id="doctor-id" value="{{ $appointments[0]->doctor->id }}">
        <textarea name="message" placeholder="Type your message here..." required></textarea>
        <button type="submit">Send</button>
    </form>

    <script>
        // Update hidden input with selected doctor ID
        document.getElementById('doctor-select').addEventListener('change', function() {
            document.getElementById('doctor-id').value = this.value;
        });

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

        // Handle form submission for the chat form
        document.querySelector('.chat-form').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent the form from submitting the default way

            let message = this.querySelector('textarea[name="message"]').value;
            let doctorId = this.querySelector('input[name="doctor_id"]').value;

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
                    document.querySelector('textarea[name="message"]').value = '';

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
    </script>
</body>

</html>
