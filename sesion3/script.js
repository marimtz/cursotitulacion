
/*
comentarios en 
Jaba Script
*/  
// alert ("mi primer codigo en Java Script");

var a =5;  // asignar el valor 5 a la variable  a
var b= 3; 
console. log("la suma de a+b=" +(a+b));
console. log("la resta de a-b="+(a-b));
console. log("la multiplicacion de a x b="+(a*b));
console. log("la division de a / b="+(a/b));
// declarar variables
var nombreAlumno ="pedro"
var nombre="juan"
var _nombreCompleto="juan....."
// Mostrar en consola los valores  de las variables

console.log (nombreAlumno);
console.log (_nombreCompleto);
// funciones
function suma (){
    //alert(a);
    let a = Number(document.forms["formulario"]["num1"].value);
    let b = Number(document.forms["formulario"]["num2"].value);
    alert(a+b)

   // console.log(a+b),
}


function calculadora (){
var x = document. getElementById ("valor1").value
var y = document. getElementById ("valor2").value
var x=Number(x);
var y= Number(y);
document.getElementById("resultado"). innerHTML=(x+y);


var op = document.getElementById("operacion").value;
var resultado=document.getElementById("resultado");
resultado. style.color="green";
resultado. style.fontSize="24px";

var calc = document. document.getElementById("calculadora");
calc.style. backgroundcolor="lightblue";


switch(op){
    case "sum":
        resultado.innerHTML=(x+y);
        break;
        case "res":
        resultado.innerHTML=(x-y);
        break;
        case "mul":
        resultado.innerHTML=(x*y);
        break;
        case "div":
        resultado.innerHTML=(x/y);
        break;
        default:
            resultado.innerHTML="opcion no valida";


}
}