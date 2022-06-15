<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Models\Cliente;
use App\Models\Endereco;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [

            //Cliente
            'nome' => ['required', 'string', 'max:255'],
            'sobrenome' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'max:14', 'unique:cliente'],
            'email' => [
                'required', 'string', 'email',
                'max:255','unique:cliente'
            ],
            'nascimento' => ['required'],
            'celular' => ['required', 'string', 'max:14'],
            
            //Endereço
            'cep' => ['required', 'string', 'max:14'],
            'bairro' => ['required', 'string', 'max:60'],
            'numero' => ['required', 'max:6'],

            //Senha
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        $endereco = Endereco::create($data);

        return Cliente::create([
            'nome' => $data['nome'], 
            'sobrenome' => $data['sobrenome'],
            'cpf' => $data['cpf'],
            'nascimento' => $data['nascimento'],
            'email' => $data['email'],
            'celular' => $data['celular'],
            'telefone' => $data['telefone'],
            'endereco_id' => $endereco->id,
            'password' => Hash::make($data['password'])
        ]);
    }
}
