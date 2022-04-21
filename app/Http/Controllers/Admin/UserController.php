<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Http\Resources\Admin\User\UserCollection;
use App\Http\Resources\Admin\User\UserResource;
use App\Models\User;
use App\Traits\ApiResponser;

class UserController extends Controller
{
	use ApiResponser;

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function index()
	{
		$users = new User();
		$usersCount = $users->get()->count();
		$users = $users->pagination();
		return $this->respondSuccessWithPagination(new UserCollection($users), $usersCount);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);
		return $this->respondSuccess(new UserResource($user));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Http\Requests\StoreUserRequest  $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function store(StoreUserRequest $request)
	{
		$userData = $request->all();
		$user = User::create($userData);
		return $this->respondSuccess(new UserResource($user));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Http\Requests\UpdateUserRequest  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function update(UpdateUserRequest $request, $id)
	{
		$userData = $request->all();
		$user = User::findOrFail($id);
		if (!User::where('role', 'owner')->where('id', '!=', $user->id)->first() && $userData['role'] !== 'owner') {
			return $this->respondBadRequest('You must have at least one user with owner role.');
		}
		$user->update($userData);
		return $this->respondSuccess(new UserResource($user));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);
		if (!User::where('role', 'owner')->where('id', '!=', $user->id)->first()) {
			return $this->respondBadRequest('You must have at least one user with owner role.');
		}
		$user->delete();
		return $this->respondSuccess();
	}
}
