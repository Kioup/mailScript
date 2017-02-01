<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mailForm by alakay02</title>
    <style>
        *{
            box-sizing: border-box;
            font-family: sans-serif;
        }
        input{
            width: 350px;
            font-size: 1.2rem;
            display: block;
            margin-bottom: 30px;
        }
        label{
            font-size: 1.3rem;
        }
        textarea{
            display: block;
            width: 500px;
            height: 250px;
            margin-bottom: 20px;
        }
        .error{
            text-decoration: underline;
            color: red;
            font-size: 1.2rem;
        }
        .footer{
            width: 100%;
            text-align: center;
        }
        .footer a{
            color: darkgrey;
        }
        .footer a:hover{
            color: lightgray;
        }
    </style>
</head>
<body>
<h1>mailScript</h1>
<form action="mailScript.php" method="POST">
    <div>
        <label for="lastname">LastName</label>
    </div>
    <input type="text" name="lastname" id="lastname" placeholder="Enter your lastname here...">
    <label for="firstname">FirstName</label>
    <input type="text" name="firstname" id="firstname" placeholder="Enter your firstname here...">
    <label for="subject">Subject</label>
    <input type="text" name="subject" id="subject" placeholder="Enter your subject here...">
    <label for="mail">EmailAdress</label>
    <input type="mail" name="mail" id="mail" placeholder="Enter your e-mail adress here...">
    <label for="message">Your message</label>
    <textarea name="message" id="message" placeholder="Enter your message here..."></textarea>
    <input type="submit" value="Send the e-mail">
</form>
<div class="footer">
    Created by alakay02 | <a href="https://github.com/alakay02">Github</a>
</div>
</body>
</html>
