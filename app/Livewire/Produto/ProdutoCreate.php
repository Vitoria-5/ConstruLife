<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome_produto;
    public $tipo;
    public $lote;
    public $valor;

    public function save()
    {
        Produto::create([
            'nome_produto' => $this->nome_produto,
            'tipo' => $this->tipo,
            'lote' => $this->lote,
            'valor' => $this->valor,
        ]);
 
        return redirect()->to('/produto');
    }

    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
