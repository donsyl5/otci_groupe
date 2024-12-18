<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    public function register(){
        return view('auths.register');
    }


    public function postRegister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        session()->flash('success', 'Vous avez bien ete enregistre');

        return redirect()->route('listeUtilisateurs');

    }


    public function login(){
        return view('auths.login');
    }

    public function postLogin(Request $request){
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credetials)) {
                return redirect()->route('admin');
        }

        return back()->with('error', 'Email ou Mot de passe incorrect');

    }


    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }



    public function modifierUser(Request $request, $id){
        $user = User::find($id);

        if($user == null) {
            $message = 'Utilisateur non existant';
            session()->flash('error', $message);
            return redirect()->route('listeUtilisateurs');
        }
        return view('auths.modifierUtilisateur', compact('user'));
    }


    public function updateUser(Request $request, $id){
        $user = User::find($id);

        if($user == null) {
            $message = 'Utilisateur non existant';
            session()->flash('error', $message);

            return response()->json([
                'status' => true,
                'errors' => $message
            ]);
        }


        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id.',id',
        ]);

        if($validator->passes()){
            $user->name = $request->name;
            $user->email = $request->email;
            if($request->password != ''){
                $user->password = Hash::make($request->password);
            }
            $user->save();

            session()->flash('success', 'Utilisateur enregistré avec success');

            return redirect()->route('listeUtilisateurs');
        }
    }


    public function deleteUser(Request $request){
        $evenement = User::findOrFail($request->id);
        $evenement->delete();

    Session::flash('success', 'Utilisateur supprimé avec succès');
     return redirect()->route('listeUtilisateurs');
    }

}
