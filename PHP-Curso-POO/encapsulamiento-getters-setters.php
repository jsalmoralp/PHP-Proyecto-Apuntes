<?php

class Persona {
	//Usaremos el "encapsulamiento" que se puede definir como:
	//**('public') --> Si queremos que dicha propiedad sea acesible dentro y fuera de la clase (que se puedea editar y ver).
	//**('protected') --> Si queremos que dicha propiedad solo sea accesible desde dentro de la clase (que no se pueda ver ni editar desde fuera de la clase, para evitar futuros cambios inesperados por parte del programador).
	//**('private') --> Si queremos ...
	protected $nombre;
	protected $apellido;
	protected $nick;

	function __construct($nombre, $apellido, $nick) {
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->nick = $nick;
	}

	//Si queremos editar una propiedad definida como "protected" o "private" desde fuera de la clase, podemos usar un "setter" que nos permita realizar dicha acción (también le podemos asignar un poco de lógica a dicho setter).
	public function setNick($nick) {
		if(! empty $nick) {
			$this->nick = $nick;
		}
	}

	//Si queremos acceder a una propiedad definida como "protected" o "private" para poder visualizarla desde fuera de la clase, podemos usar un "getter" que nos permitira realizar dicha acción (también le podemos asignar un poco de lógica a dicho getter).
	public function getNick() {
		return strtoupper($this->nick);
	}

	public function getNombreCompleto() {
		return $this->nombre.' '.$this->apellido;
	}
}

///Creando un nuevo objeto a partir de nuestra clase.
$persona1 = new Persona('Joan', 'Salmoral', 'raskan91');
///Haciendo uso de nuestro "setter",
$persona1->setNick('raskan');

///Haciendo uso de nuestros "getters".
echo 'El nick de '.$persona1->getNombreCompleto().' es '.$persona1->getNick();
