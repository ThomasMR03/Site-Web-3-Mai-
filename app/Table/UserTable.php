<?php
namespace App\Table;

use Core\Table\Table;

/**
* 
*/
class UserTable extends Table
{
	public function find($id)
	{
		return $this->query("SELECT users.id,
									 users.name,
									 users.password,
									 users.mail,
									 DATE_FORMAT(date_inscription, '%d/%m/%Y') as date_inscription_fr,
									 users.membre_rang
									 FROM users WHERE id = ?",[$id], true);
	}
}