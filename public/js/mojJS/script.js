function mojaFunkcija(elem){


	var selectedText = elem.options[elem.selectedIndex].innerHTML;
	var selectedValue = elem.options[elem.selectedIndex].value;
	var ukupnaCen = parseInt(document.getElementById("ukupnaCena").innerHTML);
	var ukupnaCena = Number(ukupnaCen);

	if(selectedText == "Vračar"){

		var minCenaZaOdabranuOblast = parseInt("500");
		if(ukupnaCena < minCenaZaOdabranuOblast){
			document.getElementById("labela").innerHTML = "Minimalna cena za besplatnu dostavu: " + minCenaZaOdabranuOblast + ",00 RSD";
			document.getElementById("labela").style.visibility = "visible";
			//document.getElementById("labela").style.display = 'block';
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}else{
			document.getElementById("labela").style.visibility = "hidden";
			//document.getElementById("labela").style.display = 'none';
			document.getElementById("submit-button").removeAttribute("disabled")}
	}else if(selectedText == "Mirijevo"){
		var minCenaZaOdabranuOblast = parseInt("900");
		if(ukupnaCena < minCenaZaOdabranuOblast){
			document.getElementById("labela").innerHTML = "Minimalna cena za besplatnu dostavu: " + minCenaZaOdabranuOblast + ",00 RSD";
			document.getElementById("labela").style.visibility = "visible";
			//document.getElementById("labela").style.display = 'block';
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}else{
			document.getElementById("labela").style.visibility = "hidden";
			//document.getElementById("labela").style.display = 'none';
			document.getElementById("submit-button").removeAttribute("disabled")}
	}else if(selectedText == "Zvezdara"){
		var minCenaZaOdabranuOblast = parseInt("700");
		if(ukupnaCena < minCenaZaOdabranuOblast){
			document.getElementById("labela").innerHTML = "Minimalna cena za besplatnu dostavu: " + minCenaZaOdabranuOblast + ",00 RSD";
			document.getElementById("labela").style.visibility = "visible";
			//document.getElementById("labela").style.display = 'block';
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}else{
			document.getElementById("labela").style.visibility = "hidden";
			//document.getElementById("labela").style.display = 'none';
			document.getElementById("submit-button").removeAttribute("disabled")}
	}else if(selectedText == "Dušanovac"){
		var minCenaZaOdabranuOblast = parseInt("700");
		if(ukupnaCena < minCenaZaOdabranuOblast){
			document.getElementById("labela").innerHTML = "Minimalna cena za besplatnu dostavu: " + minCenaZaOdabranuOblast + ",00 RSD";
			document.getElementById("labela").style.visibility = "visible";
			//document.getElementById("labela").style.display = 'block';
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}else{
			document.getElementById("labela").style.visibility = "hidden";
			//document.getElementById("labela").style.display = 'none';
			document.getElementById("submit-button").removeAttribute("disabled")}
	}else if(selectedText == "Voždovac"){
		var minCenaZaOdabranuOblast = parseInt("900");
		if(ukupnaCena < minCenaZaOdabranuOblast){
			document.getElementById("labela").innerHTML = "Minimalna cena za besplatnu dostavu: " + minCenaZaOdabranuOblast + ",00 RSD";
			document.getElementById("labela").style.visibility = "visible";
			//document.getElementById("labela").style.display = 'block';
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}else{
			document.getElementById("labela").style.visibility = "hidden";
			//document.getElementById("labela").style.display = 'none';
			document.getElementById("submit-button").removeAttribute("disabled")}
	}else if(selectedText == "Konjarnik"){
		var minCenaZaOdabranuOblast = parseInt("700");
		if(ukupnaCena < minCenaZaOdabranuOblast){
			document.getElementById("labela").innerHTML = "Minimalna cena za besplatnu dostavu: " + minCenaZaOdabranuOblast + ",00 RSD";
			document.getElementById("labela").style.visibility = "visible";
			//document.getElementById("labela").style.display = 'block';
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}else{
			document.getElementById("labela").style.visibility = "hidden";
			//document.getElementById("labela").style.display = 'none';
			document.getElementById("submit-button").removeAttribute("disabled")}
	}else if(selectedText == "Braće Jerković"){
		var minCenaZaOdabranuOblast = parseInt("900");
		if(ukupnaCena < minCenaZaOdabranuOblast){
			document.getElementById("labela").innerHTML = "Minimalna cena za besplatnu dostavu: " + minCenaZaOdabranuOblast + ",00 RSD";
			document.getElementById("labela").style.visibility = "visible";
			//document.getElementById("labela").style.display = 'block';
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}else{
			document.getElementById("labela").style.visibility = "hidden";
			//document.getElementById("labela").style.display = 'none';
			document.getElementById("submit-button").removeAttribute("disabled")}
	}else if(selectedText == "Medaković"){
		var minCenaZaOdabranuOblast = parseInt("700");
		if(ukupnaCena < minCenaZaOdabranuOblast){
			document.getElementById("labela").innerHTML = "Minimalna cena za besplatnu dostavu: " + minCenaZaOdabranuOblast + ",00 RSD";
			document.getElementById("labela").style.visibility = "visible";
			//document.getElementById("labela").style.display = 'block';
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}else{
			document.getElementById("labela").style.visibility = "hidden";
			//document.getElementById("labela").style.display = 'none';
			document.getElementById("submit-button").removeAttribute("disabled")}
	}else if(selectedText == "Stepa Stepanović"){
		var minCenaZaOdabranuOblast = parseInt("1100");
		if(ukupnaCena < minCenaZaOdabranuOblast){
			document.getElementById("labela").innerHTML = "Minimalna cena za besplatnu dostavu: " + minCenaZaOdabranuOblast + ",00 RSD";
			document.getElementById("labela").style.visibility = "visible";
			//document.getElementById("labela").style.display = 'block';
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}else{
			document.getElementById("labela").style.visibility = "hidden";
			//document.getElementById("labela").style.display = 'none';
			document.getElementById("submit-button").removeAttribute("disabled")}
	}

}






//////////////////////////////////////MODAL///////////////////////////////////////////////////////

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