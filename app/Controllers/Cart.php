<?php
namespace App\Controllers;

class Cart extends \CodeIgniter\RESTful\ResourceController
{
	protected $format = 'json';
	protected $modelName = \App\Models\CartModel::class;
	
	public function index()
	{
			$list = $this->model->listAll();
			return $this->respond($list);
	}
	public function create()
	{
		$values = $this->request->getPost();
		$result = $this->model->insert($values);
		if($result)
		{
			return $this->respondCreated(['message' => 'Cart created']);
		}
		return $this->fail(['message' => 'Cart not created']);
	}
	public function show($id = null) 
	{
		$cart = $this->model->find($id);
		
		if($cart)
		{
			return $this->respond([$cart]);
		}
		return $this->failNotFound('Cart not found');
		
	}
	public function update($id = null) 
	{
		$values = $this->request->getPost();
		if($values)
		{
			$result = $this->model->update($id, $values);
			if($result)
			{
				return $this->respondUpdated(['message'  => 'Cart updated']);
			}
		}
		return $this->fail(['message' => 'Cart not updated']);
	}
	public function delete($id = null) 
	{
		$this->model->delete($id);
		return $this->respondDeleted(['message' => 'Cart deleted']);
	}
}