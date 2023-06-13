<!DOCTYPE html>
<html>
<head>
  <title>Doraemon Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e0e0e0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 400px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      padding: 40px;
    }

    h2 {
      text-align: center;
      color: #4f4f4f;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #4f4f4f;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #cccccc;
    }

    .form-group input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #f44336;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #d32f2f;
    }

    .doraemon-logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .doraemon-logo img {
      width: 100px;
      height: 100px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="doraemon-logo">
      <img src="doraemon-logo.png" alt="Doraemon Logo">
    </div>
    <h2>Login</h2>
    <form action="/login" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>
</body>
</html>
