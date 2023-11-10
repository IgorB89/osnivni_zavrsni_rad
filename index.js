document.addEventListener('DOMContentLoaded', function () {
    var toggleButton = document.getElementById('toggleComments');
    var comments = document.querySelector('.comments');

    if (toggleButton && comments) {
      toggleButton.addEventListener('click', function () {
        toggleButton.textContent = comments.classList.toggle('hidden-comments') ? 'Show comments' : 'Hide comments';
      });
    }
  });