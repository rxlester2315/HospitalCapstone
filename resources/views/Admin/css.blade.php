   <style>
/* Chat Container */

body {
    font-family: Arial, sans-serif;

}

#chat-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
}

/* Chat Icon */
#chat-icon {
    background-color: #007bff;
    color: white;
    padding: 10px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 24px;
}

/* Chatbox */
#chatbox {
    width: 300px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    display: none;
    flex-direction: column;
}

#chatbox.active {
    display: flex;
}

.chat-header {
    background-color: #007bff;
    color: white;
    padding: 10px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.chat-body {
    padding: 10px;
    height: 200px;
    overflow-y: auto;
    color: black;
}

.chat-footer {
    display: flex;
    padding: 10px;
    border-top: 1px solid #ccc;
}

#chat-input {
    flex: 1;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#chat-input:focus {
    outline: none;
}

.chat-footer button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 5px 10px;
    margin-left: 5px;
    border-radius: 5px;
    cursor: pointer;
}

.chat-footer button:hover {
    background-color: #0056b3;
}

/* Chat Box for Messages */
#chat-box {
    padding: 10px;
    height: 200px;
    overflow-y: auto;
    border-bottom: 1px solid #ccc;
}
   </style>