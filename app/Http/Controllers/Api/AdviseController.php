<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreAdviseRequest;
use App\Http\Resources\Api\Advise\AdviseResource;
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
