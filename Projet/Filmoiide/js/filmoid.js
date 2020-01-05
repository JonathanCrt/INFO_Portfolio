
// Méthode générique retournant un objet XMLHttpRequest
function goXHR() {
 var xhr = null;

 if (window.XMLHttpRequest) { // Autres navigateurs
  xhr = new XMLHttpRequest();
 } else {
    if (window.ActiveXObject) { // IE 
     try {
      xhr = new ActiveXObject("Msxml2.XMLHTTP");
     } catch (e) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
      }
    } else { // XMLHttpRequest non supporté par le navigateur
       alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
       xhr = false;
     }
  }
 return xhr;
}

// Méthode générique pour un retour via XMLHttpRequest avec un transfert de données (GET)
function go(indice) {

 // Récupérat° de l'index

 var info = indice;

 // Récupérat° d'un objet XMLHttpRequest

 var xhr = goXHR();

 // Traitement une fois la réponse obtenue
 xhr.onreadystatechange = function() {
  if (xhr.readyState==4) {
   if (xhr.status==200) {
    // Retour du print du script PHP
    // reponse = xhr.responseText;
    document.getElementById('item'+indice).style.display = "none";
   } else {
      alert(xhr.status);
    }
  }
 }

 // Envoi de la requête (GET)
 xhr.open("GET","./corps/supprimer.php?info="+info,true);
 xhr.send(null);
}


function supprimer(indice) {
  if (confirm("Are you sure ?")) {
   go(indice);
  }

  return;
}
