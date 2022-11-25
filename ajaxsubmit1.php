

<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
<title>Submit Form Using AJAX and jQuery</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="style.css" rel="stylesheet">
<script src="scrpit.js"></script>
</head>
<body>
<div id="mainform">
<h2>Submit Form !!!!!!!</h2> <!-- Required div Starts Here -->
<div id="form">
<h3>Fill the Details Below</h3>
<div>
<label>Name :</label>
<input id="name" name="name" type="text" ><br>
<label>Email :</label>
<input id="email" name="email" type="text" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" autocomplete="off"><br>
<label>Password :</label>
<input id="password" name="password" type="password" autocomplete="off" ><br>
<label>Contact No :</label>
<input id="contact" type="number" name="contact" maxlength="10" ><br>
<input id="submit" name="submit" type="button" value="Submit">
</div>
</div>
</div>
</body>
</html>

