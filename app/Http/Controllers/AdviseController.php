<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdviseRequest;
use App\Http\Resources\AdviseResource;
use App\Models\Advise;
use App\Traits\ApiResponser;

class AdviseController extends Controller
{
	use ApiResponser;

	public function store(StoreAdviseRequest $request)
	{
		$adviseData = $request->all();
		$advise = Advise::create($adviseData);
		return $this->respondSuccess(new AdviseResource($advise));
	}
}
