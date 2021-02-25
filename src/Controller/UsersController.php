<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * 
 */
class UsersController extends AppController
{
	
	public function index()
	{
		$this->paginate = [
        	'limit' => 3,
        	'order' => [
        		'Users.id' => 'desc',
        	]
        ];
        $usuarios = $this->paginate($this->Users);
		//$usuario = "Cesar";
		//$this->set(['usuarios' => $usuario]);
		///$usuarios = $this->Users->find()->all();
		//$this->set(['usuarios' => $usuarios]);
		$this->set(compact('usuarios'));
	}
}