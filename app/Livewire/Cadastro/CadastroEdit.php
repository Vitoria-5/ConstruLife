<?php

namespace App\Livewire\Cadastro;

use App\Models\Cadastro;
use Livewire\Component;

class CadastroEdit extends Component
{
    public $nome;
    public $email;
    public $numero;
    public $cpf;
    public $senha;

    public function default($id)
    {
        $cadastro = Cadastro::find($id);

        $this->nome = $cadastro->nome;
        $this->email = $cadastro->email;
        $this->numero = $cadastro->numero;
        $this->cpf = $cadastro->cpf;
        $this->senha = $cadastro->senha;
    }

    public function render()
    {
        return view('livewire.cadastro.cadastro-edit');
    }
}
