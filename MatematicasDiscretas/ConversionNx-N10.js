function conversionN2(n10){
    return false;
}

//Inicio de programa
console.log("");
let numero = prompt("Ingrese un numero: ");

const digitize = (n) => [...`${Math.abs(n)}`].map((i)=> parseInt(i));
