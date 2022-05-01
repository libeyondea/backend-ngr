<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateAdviseRequest;
use App\Http\Resources\Admin\Advise\AdviseCollection;
use App\Http\Resources\Admin\Advise\AdviseResource;
use App\Models\Advise;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class AdviseController extends Controller
{
	use ApiResponser;

	public function index(Request $request)
	{
		$advises = new Advise();
		if ($request->has('q')) {
			$advises = $advises->where('name', 'LIKE', '%' . $request->q . '%')
				->orWhere('email', 'LIKE', '%' . $request->q . '%')
				->orWhere('phone_number', 'LIKE', '%' . $request->q . '%');
		}
		$advisesCount = $advises->get()->count();
		$advises = $advises->pagination();
		return $this->respondSuccessWithPagination(new AdviseCollection($advises), $advisesCount);
	}

	public function show($id)
	{
		$advise = Advise::findOrFail($id);
		return $this->respondSuccess(new AdviseResource($advise));
	}

	public function update(UpdateAdviseRequest $request, $id)
	{
		$adviseData = $request->all();
		$advise = Advise::findOrFail($id);
		$advise->update($adviseData);
		return $this->respondSuccess(new AdviseResource($advise));
	}

	public function destroy($id)
	{
		$advise = Advise::findOrFail($id);
		$advise->delete();
		return $this->respondSuccess(new AdviseResource($advise));
	}
}
