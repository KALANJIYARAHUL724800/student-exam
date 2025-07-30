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
    public function InsertUser($Data)
    {
        return User::create([
            'name' => $Data['name'],
            'email' => $Data['email'],
            'password' => Hash::make($Data['password']),
            'class_id' => $Data['class_id']
        ]);
    }
    public function getUserByIdData($Id)
    {
        return User::find($Id);
    }
    public function updateUser($Id, $Data)
    {
        $User = User::find($Id);
        if (!empty($User)) {
            $User->update($Data);
            return $User;
        }
        return null;
    }
    public function deleteUser($Id)
    {
        $User = User::find($Id);
        if (!empty($User)) {
            $User->delete();

            return true;
        }
        return false;
    }
    public function updateOneUser($Id, $Data)
    {
        $User = User::find($Id);
        if (!empty($User)) {
            $User->update($Data);
            return $User;
        }
        return null;
    }
}