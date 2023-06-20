
const title = document.getElementById("title");
const titleShow = document.getElementById("titleShow");
title.addEventListener("input", () => {
    titleShow.innerText = title.value;
});

const price = document.getElementById("price");
const priceShow = document.getElementById("priceShow");
price.addEventListener("input", () => {
    priceShow.innerText = price.value;
});

const pictureInput = document.getElementById("picture");
const picture = document.getElementById("pictureShow");
pictureInput.addEventListener("change", () => {
  const file = pictureInput.files[0];
  picture.src = URL.createObjectURL(file);
});