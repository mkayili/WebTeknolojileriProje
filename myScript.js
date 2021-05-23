/*var width;
window.onresize = window.onload = function() {
	width = window.innerWidth;
	if (width < 768) {
		document.getElementById('parag').innerHTML = document.getElementById('navBarMini').innerHTML;
	} else {
		document.getElementById('parag').innerHTML = document.getElementById('navBarLarge').innerHTML;
	}
}*/

function validateForm() {
  var adsoyad = document.forms["myForm"]["adsoyad"].value;
  var email = document.forms["myForm"]["email"].value;
  var telefon = document.forms["myForm"]["telefon"].value;
  var mesaj = document.forms["myForm"]["mesaj"].value;
  var re = /\S+@\S+\.\S+/;
  
  if (adsoyad == "" || email == "" || telefon == "" || mesaj == "") {
	alert("Lütfen tüm alanları doldurunuz!");
	return false;
  }
  
  if (!re.test(email)){
	  alert("Hatali email!");
	  return false;
  }
}
