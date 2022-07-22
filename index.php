<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Chatbot</title>
      <link rel="stylesheet" href="css/style.css"/>
      <script src="https://kit.fontawesome.com/5b7dcf3dd3.js" crossorigin="anonymous"></script>
      <script src="js/ajax.js"></script>
</head>
<body>
<div class="wrapper">
        <div class="title">Online Chatbot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" name="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
</body>
</html>