

function fill(id) {
  document.getElementById("hidden-id").value = id;
  let name = document.getElementById(id+"nameins").getAttribute('data-name');
  let qte = document.getElementById(id+"numins").getAttribute('data-nbr');
  let categorie = document.getElementById(id+"cateins").getAttribute('data-categorie');
  document.getElementById("fillname").value = name;
  document.getElementById("fillqte").value = qte;
  document.getElementById("fillcategorie").value = categorie;
  
  console.log(document.getElementById("fillcategorie"));
}
