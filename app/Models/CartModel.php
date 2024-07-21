<?php
namespace App\Models;

class CartModel extends \CodeIgniter\Model
{
	protected $table = 'cart';
	protected $allowedFields = ['name', 'price', 'piece', 'date']; 
	
	public function listAll()
	{
		return $this->findAll();
	}
}