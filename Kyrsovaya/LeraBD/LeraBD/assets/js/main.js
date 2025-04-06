const videoContainer = document.querySelector('.video-container');
const customThumbnail = document.querySelector('.custom-thumbnail');
const videoIframe = document.querySelector('.video-embed iframe');

videoContainer.addEventListener('mouseover', () => {
  customThumbnail.style.opacity = 0;
  videoIframe.play();
});




(() => {
  'use strict'

  
  const forms = document.querySelectorAll('.needs-validation')

  
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()



