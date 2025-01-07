const imageBox = document.querySelector("#image-box");
const overlay = document.querySelector("#image-overlay");
const image = document.querySelector("#overlay-image");
const galleryImages = Array.from(document.querySelectorAll(".gallery-item"));

const showImage = (src) => {
  image.src = src;
  imageBox.style.display = "block";
  document.body.style.overflow = "hidden";
}

const hideImage = () => {
  imageBox.style.display = "none";
  document.body.style.overflow = "auto";
}

overlay.addEventListener('click', (event) => {
  if (event.target.id === "image-overlay") {
    hideImage();
  }
})

galleryImages.forEach(image => {
  image.addEventListener('click', event => {
    const src = image.querySelector("img").src;
    showImage(src);
  })
});

// imageBox.style.display = "block";