document.getElementById("message-form").addEventListener("submit", function (event) {
    event.preventDefault();
  
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;
  
    // Simulate sending a message (In a real-world scenario, this would involve an API request)
    if (name && email && message) {
      const responseMessage = document.getElementById("response-message");
      responseMessage.style.display = "block";
      responseMessage.classList.remove("error");
      responseMessage.textContent = "Thank you for your message, " + name + ". We will get back to you shortly.";
      // Clear form
      document.getElementById("message-form").reset();
    } else {
      const responseMessage = document.getElementById("response-message");
      responseMessage.style.display = "block";
      responseMessage.classList.add("error");
      responseMessage.textContent = "Please fill in all fields before submitting.";
    }
  });
  