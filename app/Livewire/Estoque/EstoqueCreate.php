<?php

namespace App\Livewire\Estoque;

use App\Models\Estoque;
use Livewire\Component;

class EstoqueCreate extends Component
{
    public $nome_produto;
    public $quantidade;
    public $entrada_produto;
    public $saida_produto;

    public function save()
    {
        Estoque::create([
            'nome_produto' => $this->nome_produto,
            'quantidade' => $this->quantidade,
            'entrada_produto' => $this->entrada_produto,
            'saida_produto' => $this->saida_produto,
        ]);
 
        return redirect()->to('/estoque');
    }

    public function render()
    {
        return view('livewire.estoque.estoque-create');
    }
}
