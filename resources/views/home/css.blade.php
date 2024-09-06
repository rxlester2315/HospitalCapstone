<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbox</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    /* Basic styling for chatbox */
    #chatbox-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 400px;
        /* Adjusted width */
        height: 500px;
        /* Adjusted height */
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        background: #fff;
        display: none;
        max-height: 500px;
        /* Adjusted height */
        overflow: hidden;
        z-index: 1000;
        opacity: 0;
        transform: translateY(100%);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    #chatbox-container.show {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    #chat-header {
        background: #007bff;
        color: #fff;
        padding: 15px;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
        cursor: pointer;
        font-size: 18px;
    }

    #chat-body {
        padding: 15px;
        max-height: calc(100% - 100px);
        /* Adjusted height */
        overflow-y: auto;
    }

    #chat-form {
        display: flex;
        padding: 10px;
        border-top: 1px solid #ccc;
        background: #f9f9f9;
    }

    #chat-form input[type="text"] {
        flex: 1;
        padding: 10px;
        margin-right: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    #chat-form button {
        background: #007bff;
        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    /* Chat icon styling */
    #chat-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        font-size: 40px;
        cursor: pointer;
        color: #007bff;
        z-index: 1001;
        transition: transform 0.3s ease;
    }

    #chatbox-container {
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    /* Responsive adjustments */
    @media (max-width: 600px) {
        #chatbox-container {
            width: 90%;
            right: 5%;
        }

        #chat-icon {
            bottom: 10px;
            right: 10px;
            font-size: 35px;
        }
    }

    /* Additional styling for chat messages */
    .chat-message {
        margin: 10px 0;
        padding: 10px;
        border-radius: 8px;
        max-width: 80%;
        clear: both;
        display: inline-block;
        word-break: break-word;
        font-size: 14px;
    }

    .chat-message.sender {
        background-color: #007bff;
        color: #fff;
        float: right;
        text-align: right;
        border-radius: 8px 8px 0 8px;
    }

    .chat-message.receiver {
        background-color: #f1f1f1;
        color: #333;
        float: left;
        text-align: left;
        border-radius: 8px 8px 8px 0;
    }

    .chat-message strong {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    </style>
</head>

<body>

</body>

</html>