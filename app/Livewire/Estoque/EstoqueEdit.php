<?php

namespace App\Livewire\Estoque;

use App\Models\Estoque;
use Livewire\Component;

class EstoqueEdit extends Component
{
    public $nome_produto;
    public $quantidade;
    public $entrada_produto;
    public $saida_produto;
    
    public function default($id)
    {
        $estoque = Estoque::find($id);

        $this->nome_produto = $estoque->nome_produto;
        $this->quantidade = $estoque->quantidade;
        $this->entrada_produto = $estoque->entrada_produto;
        $this->saida_produto = $estoque->saida_produto;
    }

    public function render()
    {
        return view('livewire.estoque.estoque-edit');
    }
}
