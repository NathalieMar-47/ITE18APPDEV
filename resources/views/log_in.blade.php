<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/log_in.css" />
  </head>
  <body>
    <div class="login-container">
      <h2>Login</h2>
      <form action="#" method="POST" class="login-form">
        <!-- Username Field -->
        <div class="input-field">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>

        <!-- Password Field -->
        <div class="input-field">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>

        <!-- Login Button -->
        <button type="submit" class="login-btn">Login</button>

        <!-- Error Message (to display if login fails) -->
        <div class="error-message" id="error-message" style="display: none;">
          Incorrect username or password.
        </div>

        <!-- Signup Link -->
        <div class="signup-link">
          <p>Don't have an account? <a href="#">Sign up here</a></p>
        </div>
      </form>
    </div>

    <script src="./JAVA/log_in.js"></script>
  </body>
</html>
