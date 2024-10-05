<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Chat</title>
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

        .message.strong {
            color: #2c3e50;
            display: block;
            margin-bottom: 5px;
        }

        .message.you {
            text-align: right;
        }

        .message.patient strong {
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

        .chat-form input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
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
        <h1>Chat with my Patient</h1>
    </center>
    <div id="chat-container">
        <div id="chat-box">
            <!-- Display Messages Here -->
        </div>

        <div class="chat-form">
            <input type="text" id="message" placeholder="Type your message..." required />
            <button id="send">Send</button>
        </div>
    </div>


<div class="container">
 <table>
    <tr>
        <th>Name of patients</th>
         <th>Name Number</th>
          <th>Date of Schedule</th>
          <th>Case Type</th>

    </tr>
    <tr>
        <td>rex</td>
        <td>0912812312</td>
        <td>Auguest 23,2024</td>
         <td>Sore throat</td>
    </tr>
 </table>
</div>

<script>

    
    // Enable pusher logging - for development only
    Pusher.logToConsole = true;

    var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        forceTLS: true
    });

    var channel = pusher.subscribe('chat-channel');
    channel.bind('message-sent', function(data) {
        let chatBox = document.getElementById('chat-box');
        
        // Check if the sender is the authenticated doctor or the patient
        let sender = data.from == "{{ auth()->user()->id }}" ? "{{ auth()->user()->name }}" : data.senderName;

        let newMessage = `<p><strong>${sender}:</strong> ${data.message}</p>`;
        chatBox.innerHTML += newMessage;
        chatBox.scrollTop = chatBox.scrollHeight; // Scroll to bottom when new message arrives
    });

    $('#send').click(function() {
        var message = $('#message').val();

        // AJAX call to send message
        $.ajax({
            url: '{{ url("sendmessage", $appointment->id) }}', // Use appointment ID here
            method: 'POST',
            data: {
                message: message,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('#message').val(''); 
                
            }
        });
    });
</script>


</body>

</html>
