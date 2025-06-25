function loginUser() {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  fetch("http://localhost/projectdone/api/login.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({ email: email, password: password })
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      alert("Welcome, " + data.user.name + "!");
      // redirect or save token
    } else {
      alert("Login failed: " + data.message);
    }
  })
  .catch(error => {
    console.error("Error:", error);
  });
}
