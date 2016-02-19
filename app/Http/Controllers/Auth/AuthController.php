<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

     public function postLogin(){

        $dados = \Request::only('email','password');


        $rules = [
            'email'     => 'required|min:5',
            'email'    => 'required|email',
            'password'    => 'required'
        ];
        $messages = [
            'email.required'     => 'O e-mail é obrigatório.',
            'email.min'          => 'O e-mail deve ter pelo menos :min caracteres.',
            'email.email'          => 'Insira um e-mail válido.',
            'password.required'     => 'A senha é obrigatório.'
        ];

        $validator = \Validator::make($dados, $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }else {

            $email = $dados['email'];
            $password = $dados['password'];

            if (\Auth::attempt(['email' => $email, 'password' => $password]))
            {            
                return redirect()->to('/admin/painel');
            }else{
                return redirect()->back()->with(['success'=>'Login inválido. Verifiques seu usuário e senha.']);
                //return redirect()->to('auth/login');
            }
        }


    }
}
