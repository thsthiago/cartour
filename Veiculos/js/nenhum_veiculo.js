let box = document.querySelector('.cadastrados .box');
let cadastrados = document.querySelector('.cadastrados');

// console.log(!!box);
if(!!box == false) {
  cadastrados.innerHTML += `<h1 class="nenhum_veiculo">Nenhum veículo cadastrado</h1>`
  let nenhum = document.querySelector('.nenhum_veiculo');
  nenhum.style.position = "absolute";
  nenhum.style.bottom = "50%";
  nenhum.style.transform = "translateY(-50%)";
  nenhum.style.color = "red";
  nenhum.style.fontSize = "20px";
}
