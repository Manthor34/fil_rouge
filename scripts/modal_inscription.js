let bienvenueSelector = document.querySelector(".bienvenue");
let inscriptionButtonSelector = document.querySelector(".inscrit");
let inscriptionModalSelector = document.querySelector(".inscription");
let connexionButtonSelector = document.querySelector(".connecte");
let connexionModalSelector = document.querySelector(".connexion");
let crossInscriptionSelector = document.querySelector(".crossIns");
let crossConnexionSelector = document.querySelector(".crossCon");
let bgSelector = document.querySelector(".white");


inscriptionButtonSelector.addEventListener("click", function(){
  inscriptionModalSelector.style.display = "flex";
  bienvenueSelector.style.display = "none"
});

crossInscriptionSelector.addEventListener("click", function(){
  inscriptionModalSelector.style.display = "none";
  bienvenueSelector.style.display = "flex"
});

connexionButtonSelector.addEventListener("click", function(){
  connexionModalSelector.style.display = "flex";
  bienvenueSelector.style.display = "none"
});

crossConnexionSelector.addEventListener("click", function(){
  connexionModalSelector.style.display = "none";
  bienvenueSelector.style.display = "flex"
}); 

bgSelector.addEventListener("click", function(){
  inscriptionModalSelector.style.display = "none";
  connexionModalSelector.style.display = "none";
  bienvenueSelector.style.display = "flex"
});