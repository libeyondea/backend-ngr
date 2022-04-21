<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
			$advises = $advises->where('name', 'like', '%' . $request->q . '%');
		}
		$advisesCount = $advises->get()->count();
		$advises = $advises->pagination();
		return $this->respondSuccessWithPagination(new AdviseCollection($advises), $advisesCount);
	}

	public function destroy($id)
	{
		$advise = Advise::findOrFail($id);
		$advise->delete();
		return $this->respondSuccess(new AdviseResource($id));
	}
}
