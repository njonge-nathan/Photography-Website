function validateForm() {
  
    var nameInput = document.querySelector("input[name='name']");
    var emailInput = document.querySelector("input[name='email']");
    var messageInput = document.querySelector("textarea[name='message']");
  
    // Validate input fields
    if (nameInput.value.trim() === "") {
      alert("Please enter your name.");
      return;
    }
  
    if (emailInput.value.trim() === "") {
      alert("Please enter your email.");
      return;
    }
  
    if (messageInput.value.trim() === "") {
      alert("Please enter your message.");
      return;
    }
  
    // If all fields are valid, submit the form
    this.submit();
  };
  