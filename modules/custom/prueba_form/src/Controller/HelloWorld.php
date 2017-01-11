<?php

namespace Drupal\prueba_form\Controller;

use \Drupal\Core\Controller\ControllerBase;

class HelloWorld extends ControllerBase
{

	public function escribir($nombre)
	{
		return array(
			'#theme' =>  'prueba_tema',
			'#nombre' => $nombre
			);
	}

}


?>