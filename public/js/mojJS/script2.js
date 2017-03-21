window.onload = function()
{
	//document.getElementsById("mojSelect")[0].placeholder="your message";
    var kategorija = document.getElementById("kategorija").innerHTML;

    if(kategorija == "Pizza"){
		document.getElementById("drugaDiv").style.display = 'block';
		document.getElementById("trecaDiv").style.display = 'block';
		document.getElementById("cetvrtaDiv").style.display = 'none';

		document.getElementById("prva").innerHTML = "Cena (24cm)";
		document.getElementById("druga").innerHTML = "Cena (32cm)";
		document.getElementById("treca").innerHTML = "Cena (45cm)";

		document.getElementById("prvaText").required = true;
		document.getElementById("drugaText").required = true;
		document.getElementById("trecaText").required = true;


	}else if(kategorija == "Roštilj na kilo"){
		document.getElementById("drugaDiv").style.display = 'block';
		document.getElementById("trecaDiv").style.display = 'block';
		document.getElementById("cetvrtaDiv").style.display = 'block';

		document.getElementById("prva").innerHTML = "Cena (200g)";
		document.getElementById("druga").innerHTML = "Cena (300g)";
		document.getElementById("treca").innerHTML = "Cena (500g)";
		document.getElementById("cetvrta").innerHTML = "Cena (1kg)";

		document.getElementById("prvaText").required = true;
		document.getElementById("drugaText").required = true;
		document.getElementById("trecaText").required = true;
		document.getElementById("cetvrtaText").required = true;
	}else{
		document.getElementById("drugaDiv").style.display = 'none';
		document.getElementById("trecaDiv").style.display = 'none';
		document.getElementById("cetvrtaDiv").style.display = 'none';

		document.getElementById("prva").innerHTML = "Cena";

		document.getElementById("prvaText").required = true;
		document.getElementById("drugaText").required = false;
		document.getElementById("trecaText").required = false;
		document.getElementById("cetvrtaText").required = false;
	}
};



function filtriranjePolja2(elem){
	var selectedText = elem.options[elem.selectedIndex].innerHTML;
	
	if(selectedText == "Pizza"){
		document.getElementById("drugaDiv").style.display = 'block';
		document.getElementById("trecaDiv").style.display = 'block';
		document.getElementById("cetvrtaDiv").style.display = 'none';

		document.getElementById("prva").innerHTML = "Cena (24cm)";
		document.getElementById("druga").innerHTML = "Cena (32cm)";
		document.getElementById("treca").innerHTML = "Cena (45cm)";

		document.getElementById("prvaText").required = true;
		document.getElementById("drugaText").required = true;
		document.getElementById("trecaText").required = true;


	}else if(selectedText == "Roštilj na kilo"){
		document.getElementById("drugaDiv").style.display = 'block';
		document.getElementById("trecaDiv").style.display = 'block';
		document.getElementById("cetvrtaDiv").style.display = 'block';

		document.getElementById("prva").innerHTML = "Cena (200g)";
		document.getElementById("druga").innerHTML = "Cena (300g)";
		document.getElementById("treca").innerHTML = "Cena (500g)";
		document.getElementById("cetvrta").innerHTML = "Cena (1kg)";

		document.getElementById("prvaText").required = true;
		document.getElementById("drugaText").required = true;
		document.getElementById("trecaText").required = true;
		document.getElementById("cetvrtaText").required = true;
	}else{
		document.getElementById("drugaDiv").style.display = 'none';
		document.getElementById("trecaDiv").style.display = 'none';
		document.getElementById("cetvrtaDiv").style.display = 'none';

		document.getElementById("prva").innerHTML = "Cena";

		document.getElementById("prvaText").required = true;
		document.getElementById("drugaText").required = false;
		document.getElementById("trecaText").required = false;
		document.getElementById("cetvrtaText").required = false;
	}
	
}



function onFileSelected(event) {

  var selectedFile = event.target.files[0];
  var reader = new FileReader();

  var imgtag = document.getElementById("picture");
  imgtag.title = selectedFile.name;

  reader.onload = function(event) {
    imgtag.src = event.target.result;
  };

  reader.readAsDataURL(selectedFile);
}


