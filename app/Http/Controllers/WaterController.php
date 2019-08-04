<?php

namespace App\Http\Controllers;

use App\Water;

class WaterController extends Controller {
	public function index() {
		
		$query = Water::query();
		$items = $query->get();

		return view('water', ['items' => $items]);
	}

	public function store() {
		$data = request()->all();
		$model = new Water();
		$model->fill($data);
		$model->save();
		return view('/water');
	}
}