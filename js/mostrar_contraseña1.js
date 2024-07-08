const showPasswordsButton = document.getElementById('show-passwords');
const passwordInput = document.getElementById('password');

showPasswordsButton.addEventListener('click', function() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
  } else {
    passwordInput.type = 'password';
  }
});
