<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Responses\BaseResponse; // Pastikan Anda mengimpor BaseResponse dengan benar

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resp = new BaseResponse(true, 'Success', User::all());
        return $resp->getResponse();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = new User();

        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->password = bcrypt($request->password); // Hash password sebelum disimpan
        $user->role_id = $request->role_id;
        $user->address_id = $request->address_id;

        $user->save(); // Simpan pengguna ke database

        $resp = new BaseResponse(true, 'User created successfully', $user);
        return $resp->getResponse(); // Mengembalikan respons
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $resp = new BaseResponse(true, 'Success', $user);
        return $resp->getResponse();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $user->fullname = $request->fullname;
        $user->username = $request->username;

        // Hanya hash password jika diubah
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->role_id = $request->role_id;
        $user->address_id = $request->address_id;

        $user->save(); // Simpan perubahan ke database

        $resp = new BaseResponse(true, 'User updated successfully', $user);
        return $resp->getResponse(); // Mengembalikan respons
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete(); // Hapus pengguna dari database

        $resp = new BaseResponse(true, 'User deleted successfully', null);
        return $resp->getResponse(); // Mengembalikan respons
    }
}
