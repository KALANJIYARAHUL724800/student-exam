<?php
namespace App\Services;
use App\Models\User;
use Hash;
class UserService
{
    public function getAllUsers()
    {
        return User::where('active_flag', 1)->get(['name', 'email', 'class_id', 'password']);
    }
    public function InsertUser($data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'class_id' => $data['class_id']
        ]);
    }
    public function getUserByIdData($id)
    {
        return User::find($id);
    }
    public function updateUser($id, $data)
    {
        $user = User::find($id);
        if (!empty($user)) {
            $user->update($data);
            return $user;
        }
        return null;
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        if (!empty($user)) {
            $user->delete();

            return true;
        }
        return false;
    }
    public function updateOneUser($id, $data)
    {
        $user = User::find($id);
        if (!empty($user)) {
            $user->update($data);
            return $user;
        }
        return null;
    }
}