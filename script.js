document.addEventListener('DOMContentLoaded', function() {
  var toggleButton = document.getElementById('toggle-social-media');
  var socialMediaIcons = document.querySelector('.social-media');

  toggleButton.addEventListener('click', function() {
    socialMediaIcons.classList.toggle('hidden');
  });
});

