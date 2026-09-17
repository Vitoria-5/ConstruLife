<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome_produto;
    public $tipo;
    public $lote;
    public $valor;
    
    public function default($id)
    {
        $produto = Produto::find($id);

        $this->nome_produto = $produto->nome_produto;
        $this->tipo = $produto->tipo;
        $this->lote = $produto->lote;
        $this->valor = $produto->valor;
    }

    public function render()
    {
        return view('livewire.produto.produto-edit');
    }
}
