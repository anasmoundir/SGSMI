document.getElementById("a").value = "";

function fill(id) {
  document.getElementById("hidden-id").value = id;
  let name = document.getElementById(id + "nameins").value;
  document.getElementById("a").value = name;

  console.log(name);
}
