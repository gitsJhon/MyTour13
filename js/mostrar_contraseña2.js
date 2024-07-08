const showConfirmPasswordsButton = document.getElementById('show-confirm-password');
const confirmInput = document.getElementById('confirm-password');

showConfirmPasswordsButton.addEventListener('click', function() {
    if (confirmInput.type === 'password') {
      confirmInput.type = 'text';
    } else {
      confirmInput.type = 'password';
    }
  });
  