<?php

//Podemos definir una clase como "abstract" cuando esta de por si sola no tiene ningun sentido utilizarla, como se ve en el ejemplo de este tutorial.
abstract class Unidad {
	protected $conVida = true;
	protected $nombre;

	public function __construct($nombre) {
		$this->nombre = $nombre;
	}

	public function movimiento($direccion) {
		echo $this->nombre.' se mueve hacia '.$direccion;
	}

	//Cuando definimos un método como "abstract", nos obligamos en cada uno de los hijos a definir obligatoriamente este método, ya que sino nos lanzará un error.
	abstract public function ataque($oponente) {
		echo "<p>{$this->nombre} ataca a $oponente .</p>";
	}
}

//Una clase puede extender de otra con "extends", adquiriendo todo el código escrito de la clase de la cual extiende. Pero a más a más puede sobreescribir cualquier propiedad o método creados en la "clase padre".
class Soldado extends Unidad {
	public function ataque($oponente) {
		echo "<p>{$this->nombre} corta a $oponente en dos.</p>";
	}
}
class Arquero extends Unidad {
	public function ataque($oponente) {
		echo "<p>{$this->nombre} dispara a $oponente con una flecha.</p>";
	}
}

///Creamos una instancia de cada una de las clases hijo que hemos definido.
$raskan = new Soldado('raskan');
$pepito = new Arquero('pepito');

/// Hacemos uso de cada uno de los métodos creados/modificados en cada una de las clases definidas, biendo asi el efecto que toman al heredar.
$raskan->movimiento('el norte');
$raskan->ataque('pepito');
$pepito->movimiento('atras');
$pepito->ataque('raskan');
