console.log("exportado correctamente");
const collection = document.querySelectorAll(".collection a");
console.log(collection);

collection.forEach(function (link) {
    link.addEventListener("click", function (event) {
      event.preventDefault();
      
      collection.forEach(function (otherLink) {
        otherLink.classList.remove("a-color");
      });
  
      this.classList.add("a-color");
    });
  });
  