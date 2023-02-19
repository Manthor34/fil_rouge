// modal deconnexion

let profilSelector = document.querySelector(".bg-login");
let modalSelector = document.querySelector(".modal");
let backgroundSelector = document.querySelector(".editor");
let navSelector = document.querySelector(".nav")
let galerieSelector = document.querySelector(".page-galerie")

profilSelector.addEventListener("click", function(){
  if (modalSelector.style.display == "block"){
    modalSelector.style.display = "none";
  } else {
    modalSelector.style.display = "block";
  }
});

backgroundSelector.addEventListener("click", function(){
  if(modalSelector.style.display == "block"){
    modalSelector.style.display = "none";
  }
});

galerieSelector.addEventListener("click", function(){
  if(modalSelector.style.display == "block"){
    modalSelector.style.display = "none";
  }
});