<?php

namespace App\Controllers;

use App\Core\Controller;

class Baju extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Baju();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('baju/index', $data);
	}

	public function input()
	{
		$this->dashboard('baju/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/baju');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('baju/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/baju');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/baju');
	}
}
