<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Middleware\Session;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use app\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function profile(Route $route, Request $request)
    {
        $action = $route->getName();
        $current_user = $request->user();

        return view('user.profile', [
            'action' => $action,
            'current_user' => $current_user,
            'letter' => $this->get_current_user_name_first_letter($current_user->name)
        ]);
    }

    public function update_profile(Request $request)
    {
        $current_user = $request->user();
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' .$current_user->id,
        ];
        $messages = [
            'required' => 'Todos los campos son requeridos.',
            'email' => 'El campo ingresado no es de tipo email.',
            'unique' => 'El nombre o correo ya existen.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $current_user->name = $request->name;
        $current_user->email = $request->email;

        $current_user->save();

        return redirect()->back()->with('message', 'Actualizado !');
    }

    public function password(Route $route, Request $request)
    {
        $action = $route->getName();
        $current_user = $request->user();

        return view('user.password', [
            'action' => $action,
            'current_user' => $current_user,
            'letter' => $this->get_current_user_name_first_letter($current_user->name)
        ]);
    }

    public function update_password(Request $request)
    {
        $current_user = $request->user();

        $rules = [
            'currentPassword' => 'hash:' . $current_user->password,
            'newPassword' => 'required|same:confirmPassword',
            'confirmPassword' => 'required'
        ];

        $messages = [
            'hash' => 'Clave actual incorrecta',
            'required' => 'Todos los campos son requeridos.',
            'same' => 'Nueva contraseña y confirmar contraseña no coinsiden.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $current_user->password = Hash::make($request->newPassword);
        $current_user->save();

        return redirect()->back()->with('message', 'Actualizado !');
    }

    private function get_current_user_name_first_letter($name)
    {
        return strtoupper($name[0]);
    }
}
