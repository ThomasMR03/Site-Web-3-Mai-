<?php
namespace App\Table;

use Core\Table\Table;
/**
*
*/
class PostTable extends Table
{
	protected $table = "articles";

	public function last()
	{
		return $this->query(" SELECT articles.id,
									articles.titre,
									articles.contenu,
									DATE_FORMAT(date_creation, '%d/%m/%Y') as date_creation_fr,
									articles.category_id,
									articles.auteur,
									articles.img,
									categories.titre as category
								FROM articles
								LEFT JOIN categories
									ON articles.category_id = categories.id
								ORDER BY articles.id DESC

							");
	}

	public function lastRecent()
	{
		return $this->query(" SELECT articles.id,
									articles.titre,
									articles.contenu,
									DATE_FORMAT(date_creation, '%d/%m/%Y') as date_creation_fr,
									articles.category_id,
									articles.auteur,
									articles.img,
									categories.titre as category
								FROM articles
								LEFT JOIN categories
									ON articles.category_id = categories.id
								ORDER BY articles.id DESC
								LIMIT 0, 4

							");
	}

	public function find($id)
	{
		return $this->query(" SELECT articles.id,
									articles.titre,
									articles.contenu,
									articles.date_creation,
									articles.auteur,
									articles.img,
									categories.titre as category
								FROM articles
								LEFT JOIN categories
									ON category_id = categories.id
								WHERE articles.id = ?
							", [$id], true);
	}
}