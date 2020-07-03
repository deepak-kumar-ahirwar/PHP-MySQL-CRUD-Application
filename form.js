function validateForm() {
  var x = document.forms["insert_form"]["name"].value;
  if (x == "" || x == null) {
    alert("Details must be filled out");
    return false;
  }
}
