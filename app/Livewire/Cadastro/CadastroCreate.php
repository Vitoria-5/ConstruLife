<?php

namespace App\Livewire\Cadastro;

use App\Models\Cadastro;
use Livewire\Component;

class CadastroCreate extends Component
{
    public $nome;
    public $email;
    public $numero;
    public $cpf;
    public $senha;

    public function save()
    {
        Cadastro::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'numero' => $this->numero,
            'cpf' => $this->cpf,
            'senha' => $this->senha,
        ]);
 
        return redirect()->to('/cadastro');
    }

    public function render()
    {
        return view('livewire.cadastro.cadastro-create');
    }
}
