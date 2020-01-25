<html>
<head>
<title>Porject-Ajna</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<div class="container">
    <input type="checkbox" id="switch">
    <label for="switch">
      <b class="top"></b>
      <b class="bottom"></b>
    </label>
  <div class="login">
    <h1>Login</h1>
    <form action="php/login.php" method="POST">
      <p>
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" name="username" required>
      </p>
      <p>
        <label for="pass">Password</label>
        <input type="password" placeholder="Enter password" name="password" required>
      </p>
      <p>
        <input type="submit" value="login">
      </p>
    
    </form>
  </div>
</div>
</body>
</html>