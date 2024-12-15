<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Send a Message</title>
    <link rel="stylesheet" href="./CSS/message.css" />
  </head>
  <body>
    <div class="message-container">
      <h2>Send Us a Message</h2>
      <form id="message-form" class="message-form">
        <div class="input-field">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div class="input-field">
          <label for="email">Your Email</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="input-field">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="send-btn">Send Message</button>
      </form>
      <div id="response-message" class="response-message" style="display:none;"></div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
