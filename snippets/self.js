let images = document.querySelectorAll('.self__image');

let counter = 0;

setInterval(
  () => {
    images.forEach((image, index) => {
      if (index !== counter) {
        image.style.opacity = 0;
      } else {
        image.style.opacity = 1;
      }
    });

    counter++;

    if (counter === images.length - 1) {
      counter = 0;
    }
  },

  300
);
