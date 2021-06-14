<?php

//En la programación orientada a objetos, las principal herramienta que usaremos son las variables, en las cuales almacenaremos información.
$variable = 'información';

//Otra de las principales herramientas que usaremos en la programación orientada a objetos son las funciones, que estas nos permitirán realizar acciónes de forma automática con los valores de nuestras variables.
function funcion() {
	//--Aquí a dentro colocaremos la lógica de nuestra función.
}

//Y otra de las principales herramientas de la programación orientada a objetos son las clases, que pueden ser un objeto, acción, o evento predefinido con unos valores propios y únicos de esta clase, pero será un algo genérico.
class Persona {
	//Estas clases pueden contener variables en las cuales podemos almacenar información (a las cuales nos referiremos como "propiedades" de esta clase).
	var $nombre;
	var $apellido;

	//Aparte estas clases pueden tener una o varias funciones propias, las cuales nos permiten asignar de forma propia algunas caracteristicas de estas (estas funciones que creemos dentro de una clase nos referiremos a ellas como "métodos" de estas clases).
	//El método "__construct", es único y nos permite definir que valores serán asignados de forma automática al crear una nueva instancia de esta clase u objeto.
	function __construct($nombre, $apellido) {
		// Para referirnos a propiedades ya definidas dentro de la misma clase podemos usar la palabra reservada "$this->".
		$this->nombre = $nombre;
		$this->apellido = $apellido;
	}

	//También podemos crear métodos para que realicen alguna acción para nosotros exclusivos de esta clase.
	function nombreCompleto() {
		return $this->nombre.' '.$this->apellido;
	}
}

//Una vez tengamos nuestra clase creada, podremos crear nuevos objetos almacenados en variables que serán un algo específico, con el operador "new".
//Podemos asignar los valores usando el método "__construct" definido dentro de la clase.
$persona1 = new Persona('Joan', 'Salmoral');
//Pero también podemos podemos hacerlo asignado los valores manualmente.
$persona2 = new Persona;
$persona2->nombre = 'Pepito';
$persona2->apellido = 'Florentino';

//Y ya para finalizar podemos usar el método definido dentro de la clase (teniendo los valores principales ya definidos) de la siguiente forma;
echo $persona1->nombreCompleto();
exit($persona2->nombreCompleto());