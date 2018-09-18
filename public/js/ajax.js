window.addEventListener("load", function(){
	document.getElementById("prenom").addEventListener("blur", function(){ //Lors du blur de la partie prénom, appel d'ajax
		verification();
		
	}, false);
}, false);

function createxhr(){
	var xhr = null
	if(window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
	}else if(window.ActiveXObject){
		xhr = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		xhr = alert("Votre navigateur n'est pas compatible avec AJAX...");
	}
	return xhr;
}

function verification(){
		var xhr = createxhr();	
		//traitement de la réponse
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				if(xhr.responseText == "present"){
                    window.alert("Cette presonne est déjà présente dans la base de donnée.")
                }
			}
		};
		var prenom = document.getElementById("prenom").value;
		var nom = document.getElementById("nom").value;
		var parametres = "prenom="+prenom+" nom="+nom;;
		xhr.open("POST","http://127.0.0.1/TP2/public/?controller=enseignant&action=estPresent", true);
		xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		//on envoi au php qui fera le traitement
		xhr.send(parametres);
}

