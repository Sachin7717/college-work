
function validateForm() {
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('confirmPassword').value;

  if (name === '' || email === '' || password === '' || confirmPassword === '') {
    alert("Please fill out all fields.");
    return false;
  }

  if (password !== confirmPassword) {
    alert("Passwords do not match.");
    return false;
  }

  return true;
}
