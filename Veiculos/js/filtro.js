let filtro = document.querySelector('.filtro p');
let filtrar = document.querySelector('.filtrar');
let filtrarStyle = getComputedStyle(filtrar);
let boxs = document.querySelectorAll('.box');
let radioMoto = document.querySelector('input[value="moto"]')
let radioCarro = document.querySelector('input[value="carro"]')
let radioTodos = document.querySelector('input[value="todos"]')

filtro.onclick = () => {
  if (filtrarStyle.visibility == 'hidden') {
    filtrar.style.visibility = "visible"
    filtro.style.backgroundColor = "white";
  } else {
    filtrar.style.visibility = "hidden";
    filtro.style.backgroundColor = "transparent";
  };
};

function filtraBox (tipo) {
  for(let i of boxs) {
    if (tipo == "Carro") {
      if (i.querySelectorAll('p')[1].innerText == 'Tipo do veículo: Carro'){
        i.style.display = "block";
      }
      if (i.querySelectorAll('p')[1].innerText == 'Tipo do veículo: Moto'){
        i.style.display = "none";
      }
    }

    if (tipo == "Moto") {
      if (i.querySelectorAll('p')[1].innerText == 'Tipo do veículo: Moto'){
        i.style.display = "block";
      }
      if (i.querySelectorAll('p')[1].innerText == 'Tipo do veículo: Carro'){
        i.style.display = "none";
      }
    }

    if (tipo == "Todos") {
        i.style.display = "block";
    }
  };
}

radioCarro.addEventListener("change", (e) => {
  if (radioCarro.checked) {
    filtraBox("Carro")
  }
});

radioMoto.addEventListener("change", (e) => {
  if (radioMoto.checked) {
    filtraBox("Moto")
  }
});

radioTodos.addEventListener("change", (e) => {
  if (radioTodos.checked) {
    filtraBox("Todos")
  }
});