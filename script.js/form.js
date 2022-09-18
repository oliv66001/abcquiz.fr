function Form1() {
  var nom = document.forms["formCom"]["nom"];
  var prenom = document.forms["formCom"]["prenom"];
  var email = document.forms["formCom"]["email"];
  var msg = document.forms["formCom"]["msg"];
  var Check1 = document.forms["formCom"]["Check1"];

  if (nom.value == "") {
    alert("Mettez votre nom.");
    nom.focus();
    return false;
  }
  if (prenom.value == "") {
    alert("Mettez votre pénom.");
    prenom.focus();
    return false;
  }
  if (email.value == "") {
    alert("Mettez une adresse email valide.");
    email.focus();
    return false;
  }
  if (email.value.indexOf("@", 0) < 0) {
    alert("Mettez une adresse email valide.");
    email.focus();
    return false;
  }
  if (email.value.indexOf(".", 0) < 0) {
    alert("Mettez une adresse email valide.");
    email.focus();
    return false;
  }

  if (msg.value == "") {
    alert("Écrivez un commentaire.");
    msg.focus();
    return false;
  }
  if (Check1.value == true) {
    alert("Merci de coché la case pour validé.");
    Check1.focus();
    return false;
  }

  return true;
}
