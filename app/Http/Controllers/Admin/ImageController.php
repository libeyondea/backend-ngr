<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UploadImageRequest;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageController extends Controller
{
	use ApiResponser;

	/**
	 * Upload image to storage and return the path to the image.
	 *
	 * @param App\Http\Requests\UploadImageRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function upload(UploadImageRequest $request)
	{
		if ($request->hasfile('image')) {
			$image = Str::random(66) . '.' . $request->file('image')->extension();
			Storage::disk('img')->put($image, file_get_contents($request->file('image')));
		}
		return $this->respondSuccess([
			'image' => $image,
			'image_url' => config('app.img_url') . '/' . $image
		]);
	}
}
