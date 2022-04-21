<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFeedbackRequest;
use App\Http\Requests\Admin\UpdateFeedbackRequest;
use App\Http\Resources\Admin\Feedback\FeedbackCollection;
use App\Http\Resources\Admin\Feedback\FeedbackResource;
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

	public function show($id)
	{
		$feedback = Feedback::findOrFail($id);
		return $this->respondSuccess(new FeedbackResource($feedback));
	}

	public function store(StoreFeedbackRequest $request)
	{
		$feedbackData = $request->all();
		$feedback = Feedback::create($feedbackData);
		return $this->respondSuccess(new FeedbackResource($feedback));
	}

	public function update(UpdateFeedbackRequest $request, $id)
	{
		$feedbackData = $request->all();
		$feedback = Feedback::findOrFail($id);
		$feedback->update($feedbackData);
		return $this->respondSuccess(new FeedbackResource($feedback));
	}

	public function destroy($id)
	{
		$feedback = Feedback::findOrFail($id);
		$feedback->delete();
		return $this->respondSuccess(new FeedbackResource($id));
	}
}
