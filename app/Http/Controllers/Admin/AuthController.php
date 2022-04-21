<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SignupAuthRequest;
use App\Http\Resources\Admin\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Illuminate\Support\Arr;

class AuthController extends Controller
{
	use ApiResponser;

	public function signin(Request $request)
	{
		$credentials = $request->only(['user_name', 'password']);

		if (!auth()->attempt(Arr::add($credentials, 'status', 'active'))) {
			return $this->respondBadRequest('Invalid credentials');
		}
		/** @var \App\Models\User $user **/
		$user = auth()->user();

		$tokenResult = $user->createToken('Personal Access Token');

		return $this->respondSuccess([
			'token' => $tokenResult->plainTextToken
		]);
	}

	public function signup(SignupAuthRequest $request)
	{
		$userData = $request->merge(['role' => 'viewer', 'status' => 'inactive', 'avatar' => null])->all();
		$user = User::create($userData);
		return $this->respondSuccess(new UserResource($user));
	}

	public function signout()
	{
		/** @var \App\Models\User $user **/
		$user = auth()->user();
		$user->tokens()->delete();
		return $this->respondSuccess();
	}

	public function me()
	{
		$user = User::findOrFail(auth()->user()->id);
		return $this->respondSuccess(new UserResource($user));
	}
}
