document.getElementById('search-icon').addEventListener('click', function() {
  document.querySelector('.search-container').classList.toggle('expanded');
  document.getElementById('search-input').focus();
});
