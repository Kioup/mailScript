# mailScript
A php script to send an e-mail to your personal e-mail adress from a HTML form.

You case use it free and for what you want, you can also Fork and send Pull request :bangbang:

#How to use
It's simple, you only need this two files to perform the mailScript.
- mailForm.html 
- mailScript.php

mailForm.php is your formular, you can inculde it to your project but you can also change what you want if you know what you are doing with **input** or **textarea** 'name' attribute.

The only thing you have to modify to make all this working is to change somes values in the **mailScript.php** file:

```php
<?php
  session_start();
  $to       = "yourEmailAdress@yourDomain.com";  // <-- Change this by your personnal email adress
  $subject  = $_POST['subject'];
  $message  = $_POST['firstname']." ".$_POST['lastname']."\r\n".
              $_POST['mail']."\r\n".
              $_POST['message']."\r\n";
  $headers  = 'From: '.$_POST['mail']."\r\n".
              'Reply-To: '.$_POST['mail']."\r\n".
              'X-Mailer: PHP/'.phpversion();
  $errors   = [];
```



> It's my first presonnal scrip repository so be understanding :)
> Need information or something else ? Contact me on contact@baptiste-dumortier.fr
