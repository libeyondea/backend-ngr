<?php

namespace App\Traits;

trait ApiResponser
{

	protected function respond($data, $statusCode = 200, $headers = [])
	{
		return response()->json($data, $statusCode, $headers);
	}

	protected function respondSuccess($data = null, $statusCode = 200, $headers = [])
	{
		return $this->respond(
			[
				'data' => $data,
			],
			$statusCode,
			$headers
		);
	}

	protected function respondSuccessWithPagination($data = null, $total = 0, $statusCode = 200, $headers = [])
	{
		return $this->respond(
			[
				'data' => $data,
				'pagination' => [
					'total' => $total
				]

			],
			$statusCode,
			$headers
		);
	}

	protected function respondError($message, $errors = null, $statusCode = 500)
	{
		return $this->respond(
			[
				'message' => $message,
				'errors' => $errors
			],
			$statusCode
		);
	}

	protected function respondBadRequest($message = 'Bad Request')
	{
		return $this->respondError($message, null, 400);
	}

	protected function respondUnauthorized($message = 'Unauthorized')
	{
		return $this->respondError($message, null, 401);
	}

	protected function respondForbidden($message = 'Forbidden')
	{
		return $this->respondError($message, null, 403);
	}

	protected function respondNotFound($message = 'Not Found')
	{
		return $this->respondError($message, null, 404);
	}

	protected function respondUnprocessableEntity($message = 'Unprocessable Entity')
	{
		return $this->respondError($message, null, 422);
	}

	protected function respondInternalError($message = 'Internal Error')
	{
		return $this->respondError($message, null, 500);
	}
}
