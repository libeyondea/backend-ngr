<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Feedback\FeedbackCollection;
use App\Models\Feedback;
use App\Traits\ApiResponser;

class FeedbackController extends Controller
{
	use ApiResponser;

	public function index()
	{
		$feedback = new Feedback();
		$feedbackCount = $feedback->get()->count();
		$feedback = $feedback->pagination();
		return $this->respondSuccessWithPagination(new FeedbackCollection($feedback), $feedbackCount);
	}
}
