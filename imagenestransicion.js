window.addEventListener('scroll', function() {
  const imageContainer = document.getElementById('image-container');
  const imagePosition = imageContainer.getBoundingClientRect().top;
  const windowHeight = window.innerHeight;

  if (imagePosition < windowHeight) {
    imageContainer.classList.add('show');
  } else {
    imageContainer.classList.remove('show');
  }
});