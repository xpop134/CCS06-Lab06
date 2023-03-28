Feedback.php

<!DOCTYPE html>


<html>
<head>
<title>Feedback Form</title>
</head>
<body>


<h1>Feedback Form</h1>
<form method="POST" action="thankyou.php">
Name: <input type="text" name="complete_name" /><br />
<br>
Email Address: <input type="email" name="email" /><br />
<br>
Type:
<select name="type">
<option value="inquiry">Inquiry</option>
<option value="feedback">Feedback</option>
<option value="other">Other/s</option>
</select>
<br />
<br>
Satisfaction (between 0 to 10): <input type="range" name="satisfaction_level" min="0" max="10"/><br />
<br>
<textarea rows="4" cols="50" name="message">
</textarea>
<br>
<br>
<button>Submit</button>
</form>
</body>
</html>



ThankYou.php

<!DOCTYPE html>
<head>
<title>Thank You!</title>
</head>
   <body>
     
     <h1>Thank You!<h1>
      <?php
      $complete_name=$_POST["complete_name"];
      $email=$_POST["email"];
      $type=$_POST["type"];
      $satisfaction_level=$_POST["satisfaction_level"];
      $message=$_POST["message"];




      print "<p> Received $type message from $complete_name ($email) </p>";
      print "<br>";
      print "<p> $message </p>";
      print "<br>";
      print "<p> Satisfaction Level: $satisfaction_level </p>";
      print "<br>";
      ?>


   </body>
</html>
