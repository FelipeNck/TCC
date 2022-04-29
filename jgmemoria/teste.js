const cartas = document.getElementById("baralho");
const imagens = ['felpsanao.jpg', 'cellbitanao.jpg', 'lubaanao.jpg', 'felpsanao.jpg', 'cellbitanao.jpg', 'lubaanao.jpg'];
let cartahtml = "";

for (let i = 0; i < imagens.length; i++) {
    cartahtml += "<div class='carta'><img src='"+ imagens[i] +"' class='frente'><img src='lixo.jpg' class='verso'></div>"
}

cartas.innerHTML = cartahtml;

function embaralhacartas(imagens) {
    imagens.sort(() => Math.random() - 0.5);
}

const a = document.querySelectorAll('.carta');
a.forEach(a => a.addEventListener("click", vira));

function vira() {
    this.classList.add('flip');
}