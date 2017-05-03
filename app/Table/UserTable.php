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

	public function nombreUser()
	{
		return $this->query("SELECT id FROM users");
	}

	public function lastUser()
	{
		return $this->query("SELECT * FROM users ORDER BY users.id DESC LIMIT 0, 5");
	}
}