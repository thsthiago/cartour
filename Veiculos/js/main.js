let tipoVeiculo = document.querySelector('select');
let label = document.querySelector('label');
let labelPortas = document.querySelector('label[for="portas"]');
let marca = document.querySelector('input[name="marca"]');
let modelo = document.querySelector('input[name="modelo"]');
let anofabricacao = document.querySelector('input[name="anofabricacao"]');
let anomodelo = document.querySelector('input[name="anomodelo"]');
let cambio = document.querySelector('input[name="cambio"]');
let portas = document.querySelector('input[name="portas"]');
let portasClass = document.querySelector('.portas_block');
let combustivel = document.querySelector('input[name="combustivel"]');
let km = document.querySelector('input[name="km"]');
let chassi = document.querySelector('input[name="chassi"]');
let preco = document.querySelector('input[name="preco"]');

if(tipoVeiculo.value == "Carro") {
  portasClass.style.display = "block";
  portas.setAttribute('min','2');
  portas.setAttribute('max','4');
} else {
  portasClass.style.display = "none";
  portas.removeAttribute('min');
  portas.removeAttribute('max');
  portas.value = 10;
}

tipoVeiculo.onchange = function () {
  if(tipoVeiculo.value == "Moto") {
    portasClass.style.display = "none";
    portas.removeAttribute('min');
    portas.removeAttribute('max');
    portas.value = 10;
  } else {
    portasClass.style.display = "block";
    portas.setAttribute('min','2');
    portas.setAttribute('max','4');
    portas.value = "";
  }
};

marca.onfocus = (event) => addMove(marca, "marca");
modelo.onfocus = (event) => addMove(modelo, "modelo");
anofabricacao.onfocus = (event) => addMove(anofabricacao, "anofabricacao");
anomodelo.onfocus = (event) => addMove(anomodelo, "anomodelo");
cambio.onfocus = (event) => addMove(cambio, "cambio");
portas.onfocus = (event) => addMove(portas, "portas");
combustivel.onfocus = (event) => addMove(combustivel, "combustivel");
km.onfocus = (event) => addMove(km, "km");
chassi.onfocus = (event) => addMove(chassi, "chassi");
preco.onfocus = (event) => addMove(preco, "preco");

function verificar (position, label) {
  let positionLabel = document.querySelector(`label[for="${label}"]`);
  if(!!position.value == true) {
    positionLabel.style.bottom = "60px";
    positionLabel.style.fontSize = "12px";
  }
}

verificar(marca, "marca");
verificar(modelo, "modelo");
verificar(anofabricacao, "anofabricacao");
verificar(anomodelo, "anomodelo");
verificar(cambio, "cambio");
verificar(portas, "portas");
verificar(combustivel, "combustivel");
verificar(km, "km");
verificar(chassi, "chassi");
verificar(preco, "preco");

function addMove (position, label) {
  let positionLabel = document.querySelector(`label[for="${label}"]`);
  positionLabel.style.bottom = "60px";
  positionLabel.style.transition = "all 0.2s";
  positionLabel.style.fontSize = "12px";
  position.style.borderColor = "red";

  position.onblur = (event) => removeMove( position,positionLabel);
}

function removeMove (position, label) {
  position.style.borderColor = "black";
  if(!!position.value == false) {
    label.style.bottom = "40px";
    label.style.fontSize = "15px";
  }
}