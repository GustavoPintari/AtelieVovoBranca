<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Models\Cliente;
use App\Models\Endereco;
use App\Http\Requests\EnderecoRequest;

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
        return view('auth.cadastro');
    }

    protected function create(array $data)
    {
        $endereco = Endereco::create([
            'cep' => $data['cep'],
            'uf' => $data['uf'],
            'cidade' => $data['cidade'],
            'rua' => $data['rua'],
            'bairro' => $data['bairro'],
            'numero' => $data['numero'],
            'complemento' => $data['complemento'],
        ]);

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
