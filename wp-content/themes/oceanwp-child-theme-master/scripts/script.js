/* ********************************************************** */
// Code pour fermer la popup
/* ********************************************************** */
var $ = jQuery; // pour pouvoir utiliser $ malgré la version noConflict de jQuery présente dans WordPress
jQuery(function() {
$('.popup-close').click(function(){
	//$(this).parent().hide();
    $('.popup-overlay').hide();
})
})


/* ********************************************************** */
// Code pour n'afficher la popup qu'1 fois par session
/* ********************************************************** */

document.addEventListener('DOMContentLoaded', function () { //lorsque le chargement du document est terminé
    const popupComponent = document.querySelector('.popup-overlay'); //stock l'element qui posséde la classe citée dans la variable
  
    const seenPopup = sessionStorage.getItem('seenPopup'); //variable qui contient la valeur de l'objet sessionStorage (1 si la pop-up a déjà été vu)
  
    if (!seenPopup) { //Si la valeur de "seenPopup" est vide
      setTimeout(() => { // la méthode setTimeout retarde l'affichage de la pop-up pendant 3s
        popupComponent.style.display = 'flex'; //affiche la pop-up en changeant la propriété "display" de l'élément "popupComponent" à "flex"
      }, 3000);
  
      sessionStorage.setItem('seenPopup', 1); //stocke la valeur 1 dans l'élément "seenPopup" ce qui indique que la pop-up a été vu
    } else { //sinon
      popupComponent.style.display = 'none'; //masque la pop-up en changeant la propriété "display" à "none"
    }
  });
  