function mojaFunkcija(elem){


	var selectedText = elem.options[elem.selectedIndex].innerHTML;
	var selectedValue = elem.options[elem.selectedIndex].value;

	if(selectedText == "Vračar"){
		var ukupnaCena = document.getElementById('ukupnaCena').innerHTML;
		if(ukupnaCena <= '500'){
			document.getElementById('labela').innerHTML = 'Minimum: 500.00 RSD';
			document.getElementById("labela").style.visibility = "visible";
			document.getElementById("submit-button").setAttribute("disabled", "disabled");
		}
	}
	else{
		document.getElementById("labela").style.visibility = "hidden";
		document.getElementById("submit-button").removeAttribute("disabled");
	}



}