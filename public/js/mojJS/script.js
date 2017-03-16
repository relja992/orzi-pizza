function mojaFunkcija(elem){


	var selectedText = elem.options[elem.selectedIndex].innerHTML;
	var selectedValue = elem.options[elem.selectedIndex].value;

	if(selectedText == "Vračar"){
		var minCenaZaOdabranuOblast = 500;
		var ukupnaCena = document.getElementById('ukupnaCena').innerHTML;
		if(ukupnaCena <= minCenaZaOdabranuOblast){
			document.getElementById('labela').innerHTML = 'Minimalna cena za besplatnu dostavu: ' + minCenaZaOdabranuOblast + ',00 RSD';
			document.getElementById("labela").style.visibility = "visible";
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}
	}else if(selectedText == "Mirijevo"){
		var minCenaZaOdabranuOblast = 900;
		var ukupnaCena = document.getElementById('ukupnaCena').innerHTML;
		if(ukupnaCena <= minCenaZaOdabranuOblast){
			document.getElementById('labela').innerHTML = 'Minimalna cena za besplatnu dostavu: ' + minCenaZaOdabranuOblast + ',00 RSD';
			document.getElementById("labela").style.visibility = "visible";
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}
	}else if(selectedText == "Zvezdara"){
		var minCenaZaOdabranuOblast = 700;
		var ukupnaCena = document.getElementById('ukupnaCena').innerHTML;
		if(ukupnaCena <= minCenaZaOdabranuOblast){
			document.getElementById('labela').innerHTML = 'Minimalna cena za besplatnu dostavu: ' + minCenaZaOdabranuOblast + ',00 RSD';
			document.getElementById("labela").style.visibility = "visible";
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}
	}else if(selectedText == "Dušanovac"){
		var minCenaZaOdabranuOblast = 700;
		var ukupnaCena = document.getElementById('ukupnaCena').innerHTML;
		if(ukupnaCena <= minCenaZaOdabranuOblast){
			document.getElementById('labela').innerHTML = 'Minimalna cena za besplatnu dostavu: ' + minCenaZaOdabranuOblast + ',00 RSD';
			document.getElementById("labela").style.visibility = "visible";
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}
	}else if(selectedText == "Voždovac"){
		var minCenaZaOdabranuOblast = 900;
		var ukupnaCena = document.getElementById('ukupnaCena').innerHTML;
		if(ukupnaCena <= minCenaZaOdabranuOblast){
			document.getElementById('labela').innerHTML = 'Minimalna cena za besplatnu dostavu: ' + minCenaZaOdabranuOblast + ',00 RSD';
			document.getElementById("labela").style.visibility = "visible";
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}
	}else if(selectedText == "Konjarnik"){
		var minCenaZaOdabranuOblast = 700;
		var ukupnaCena = document.getElementById('ukupnaCena').innerHTML;
		if(ukupnaCena <= minCenaZaOdabranuOblast){
			document.getElementById('labela').innerHTML = 'Minimalna cena za besplatnu dostavu: ' + minCenaZaOdabranuOblast + ',00 RSD';
			document.getElementById("labela").style.visibility = "visible";
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}
	}else if(selectedText == "Braće Jerković"){
		var minCenaZaOdabranuOblast = 900;
		var ukupnaCena = document.getElementById('ukupnaCena').innerHTML;
		if(ukupnaCena <= minCenaZaOdabranuOblast){
			document.getElementById('labela').innerHTML = 'Minimalna cena za besplatnu dostavu: ' + minCenaZaOdabranuOblast + ',00 RSD';
			document.getElementById("labela").style.visibility = "visible";
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}
	}else if(selectedText == "Medaković"){
		var minCenaZaOdabranuOblast = 700;
		var ukupnaCena = document.getElementById('ukupnaCena').innerHTML;
		if(ukupnaCena <= minCenaZaOdabranuOblast){
			document.getElementById('labela').innerHTML = 'Minimalna cena za besplatnu dostavu: ' + minCenaZaOdabranuOblast + ',00 RSD';
			document.getElementById("labela").style.visibility = "visible";
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}
	}else if(selectedText == "Stepa Stepanović"){
		var minCenaZaOdabranuOblast = 1100;
		var ukupnaCena = document.getElementById('ukupnaCena').innerHTML;
		if(ukupnaCena <= minCenaZaOdabranuOblast){
			document.getElementById('labela').innerHTML = 'Minimalna cena za besplatnu dostavu: ' + minCenaZaOdabranuOblast + ',00 RSD';
			document.getElementById("labela").style.visibility = "visible";
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}
	}else{
		document.getElementById("labela").style.visibility = "hidden";
		document.getElementById("submit-button").removeAttribute("disabled");
	}



}






//////////////////////////////////////MODAL///////////////////////////////////////////////////////

// Get the modal
var modal = document.getElementsById('myModal');

// Get the button that opens the modal
var btn = document.getElementsByClassName("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function openModal(elem){

	var forma = elem.form;

	//var mojModal = form.getElementsById('myModal');
	//var mojModal = document.getElementById('myModal');
	var mojModal = forma.getElementsByClassName("myModal")[0];
	mojModal.style.display = "block";

	var btn = forma.getElementsByClassName("myBtn")[0];
	
	var span = forma.getElementsByClassName("close")[0];
	span.onclick = function() {
    	mojModal.style.display = "none";
	}
	//var selectedText = forma.getElementsByClassName("myModal")[0].innerHTML;

	//alert(selectedText);

	/*mojModal.style.display = "block";

	var span = document.getElementsByClassName("close")[0];

	span.onclick = function() {
    mojModal.style.display = "none";
	}
*/
	//var name = document.getElementsByClassName("name")[0];

}