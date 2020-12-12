//declaracion de arreglos
var autos=["chevrolet","ford","izuzu"];

var dato = document.getElementById("datos");
var mod=document.getElementById("modificaciones");
dato.innerHTML="<h1>" +autos.join(" * ")+"</h1>"; 

// extrae un elemento del arreglo 
autos.pop();  // Adios a nissan
//insertar un elemento al final del arreglo
autos.push("subaru"); //  bienvenida a  subaru
autos.push("cadilac"); // bienvenida cadilac

//extrae el primer elemento del arreglo
autos.shift()// adios a chevrolet
//inserta un elemnto del arreglo
autos.unshift("volkswagen")//  bienvenido volkswagen
autos.sort();
//recorrer un arreglo y mostrar los elementos
var txt="";
autos.forEach(mostrarArreglo);
mod.innerHTML=txt;
function mostrarArreglo(value){
txt = txt + "<li>" +value+"</li>" +"<br>";

}
// mod.innerHTML="<h1>"+autos+"</h1><br>" +autos.shift ()

/*objetos en javascript*/
var persona = {
    nombre: "Citlali",
    apellido:"cruz",
     edad: "3..",
     telefono:"489-126-80-28",
     nombreCompleto: function(){
         return this.nombre + " " + this.apellido;
 }
}

var persona1 = {
    nombre: "Citlali",
    apellido:"cruz",
     edad: "3..",
     telefono:"489-126-80-28",
     nombreCompleto: function(){
         return this.nombre + " " + this.apellido;
 }
}
     persona1.apellido= "MtZ";
     function Persona(nombre, apellido,edad){
         this.nombre = nombre,
         this.apellido =apellido,
         this.edad = edad
        
     }
     //abuelo
     var abuelo=new Persona("juan","odilon,78");
     var abuela=new Persona("Maria","MTZ,75");

     var datosPersona=document.getElementById("datosPersona");
     datosPersona.innerHTML=persona.nombreCompleto();

     var datospersona1=document.getElementById("datosPersona1");
    datosPersona1.innerHTML="mi abuelo se llama"+abuelo.nombre
    +"y mi abuela se llama" + abuela.nombre;



      



