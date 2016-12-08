<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	public $client_container = 
	array( 
		array( 
			'name' => 'Sergio',
			'email' => 'sergio@correo.com',
			),  
		array( 
			'name' => 'Francisco',
			'email' => 'francisco@correo.com',
			),
		array( 
			'name' => 'Marco',
			'email' => 'marco@correo.com',
			),
			) ;
}
