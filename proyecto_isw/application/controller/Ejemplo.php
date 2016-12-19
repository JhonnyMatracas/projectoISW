<?php

class Ejemplo extends Controller 
{
	public function index(){
		echo "Estoy en Index del controlador Ejemplo";
	}

	public function acercade(){
		echo "Somos el curso de 2 DAW del Ingeniero";
	}

	public function contenido($numero){
		echo "Somos $numero alumnos en el curso";
	}
}