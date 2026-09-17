<?php

namespace App\Livewire\Movimentacao;

use App\Models\Movimentacao;
use Livewire\Component;

class MovimentacaoCreate extends Component
{
    public $idmovimentacao;
    public $qtd_movimentada;
    public $data_movimentacao;
    public $tipo;
    public $idproduto;
    public $idcadastro;

    public function save()
    {
        Movimentacao::create([
            'idmovimentacao' => $this->idmovimentacao,
            'qtd_movimentada' => $this->qtd_movimentada,
            'data_movimentacao' => $this->data_movimentacao,
            'tipo' => $this->tipo,
            'idproduto' => $this->idproduto,
            'idcadastro' => $this->idcadastro,
        ]);
 
        return redirect()->to('/movimentacao');
    }

    public function render()
    {
        return view('livewire.movimentacao.movimentacao-create');
    }
}
