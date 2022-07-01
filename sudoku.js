var numselected = null;
var tileselected = null;


var errors = 0;
 
var placa = [
   "  74916 5",
   "2   6 3 9",
   "     7 1 ",
   " 586    4",
   "  3    9 ",
   "  62  187",
   "9 4 7   2",
   "67 83    ",
   "81  45   "


]

var solution = [
    "387491625",
    "241568379",
    "569327418",
    "758619234",
    "123784596",
    "496253187",
    "934176852",
    "675832941",
    "812945763"
]

 


 
function setgame () {

   for (let r=1; r<=9; r++) 
   {
       let teste = document.getElementById("valeu");
       teste.innerHTML += "<div class='number'>"+r+"</div>";
   }

   for (let l=0; l<9; l++){
       for (let c=0; c<9; c++)
       {
           let title = document.getElementById("placa");
           title.innerHTML += "<div id='"+ l.toString() +"-"+ c.toString() +"' class='title'>"+ placa[l][c] +"</div>"
       }
   }

   b();
}

function Eduardo(){
    const c = document.querySelectorAll('.number.numberselect');
    if (c.length >= 1){
       let d = c[0];
       d.classList.remove('numberselect');
   }
   this.classList.add("numberselect");

   const colocanumero = document.querySelectorAll('.title');
   colocanumero.forEach(colocanumero => colocanumero.addEventListener("click", colocanum));
}
 
function colocanum(){
    if (this.classList[1] == 'colocado' || this.classList[2] == 'colocado'){
        let num = document.querySelectorAll('.number.numberselect');
        this.textContent = num[0].textContent;
        verifica(this);
    }else if (this.textContent == " "){
        let num = document.querySelectorAll('.number.numberselect');
        this.textContent = num[0].textContent;
        verifica(this);
    }
}

function verifica(n){
    let l = n.id[0]
    let c = n.id[2]
    
    if (solution[l][c] != n.textContent){
        errors += 1
        document.querySelector('#errors').textContent = errors
        n.classList.remove("acerto")
        n.classList.add("error")
    } else {
        n.classList.remove("error")
        n.classList.add("acerto")
    }

    n.classList.add('colocado');
    checajogo();
}

function b(){
   const a = document.querySelectorAll('.number');
   a.forEach(a => a.addEventListener("click", Eduardo));
}

document.addEventListener("DOMContentLoaded", function(){
    setgame();
})

function checajogo() {
    let num = document.querySelectorAll('.title');
    let num2 = document.querySelectorAll('.number');

    for (let i=1; i<10; i++){
        let cont = 0;

        for (let l=0; l<81; l++){
            if (num[l].textContent == i && num[l].classList[1] != 'error'){
                cont += 1
            }
        }

        if (cont == 9){
            num2[i-1].classList.add('concluido');
        } else{
            num2[i-1].classList.remove('concluido');
        }
    }

    let veri = document.querySelectorAll('.concluido');
    if (veri.length == 9){
        clearInterval(tempo);
        console.log(min+" : "+seg)
    }
}

let seg = 0, min = 0;

function cronometro() {
    if (seg < 60) {
        console.log(min+' : '+seg);
        seg++
    } else {
        min++
        seg = 0;
    }
}

let tempo = setInterval(cronometro,1000);