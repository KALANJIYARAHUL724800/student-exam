<?php

namespace App\Http\Controllers;
use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Http;
class LoginController extends Controller
{
    // test api 
    protected $UserService;
    public function __construct(UserService $UserService)
    {
        $this->UserService = $UserService;
    }

    public function login()
    {
        return view('layouts.loginLayout', ['isLoginPage' => true, 'pageName' => 'Login Page']);
    }
    public function loginProcess(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:8|max:16"
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $usertype = User::select('usertype')->where('id', Auth::id())->first();
            return response()->json([
                'email' => $credentials['email'],
                'password' => $credentials['password'],
                'usertype' => $usertype->usertype
            ]);
        }
        return redirect('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    //test for api
    public function getAllUsers()
    {
        return $this->UserService->getAllUsers();
    }
    public function insertUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'class_id' => 'required|integer'
        ]);
        $Data = $request->only('name', 'email', 'password', 'class_id');
        return $this->UserService->InsertUser($Data);
    }
    public function getUserById(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);
        return $this->UserService->getUserByIdData($request->id);
    }
    public function updateUser(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
            'class_id' => 'required|integer'
        ]);
        $Data = $request->only('name', 'email', 'password', 'class_id');
        return $this->UserService->updateUser($request->id, $Data);
    }

    public function deleteUser(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);
        return $this->UserService->deleteUser($request->id);
    }
    public function test_api()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/todos/1');
        $res = $response->json();
        return view('apipage', compact('res'));
    }
    public function updateOneUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required|string',
            'class_id' => 'required|integer'
        ]);
        $data = $request->only('name', 'email', 'password', 'class_id');
        return $this->UserService->updateOneUser($id, $data);
    }
    public function tamiltext(Request $request)
    {
        Text::create(['tamiltxt' => $request->text]);
    }
}