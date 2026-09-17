<?php

use App\Livewire\Cadastro\CadastroCreate;
use App\Livewire\Cadastro\CadastroEdit;
use App\Livewire\Cadastro\CadastroIndex;
use App\Livewire\Estoque\EstoqueCreate;
use App\Livewire\Estoque\EstoqueEdit;
use App\Livewire\Estoque\EstoqueIndex;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('produto/create', ProdutoCreate::class)->name('produto.create');
Route::get('produto/edit/{id}', ProdutoEdit::class)->name('produto.edit');
Route::get('produto', ProdutoIndex::class)->name('produto.index');

Route::get('estoque/create', EstoqueCreate::class)->name('estoque.create');
Route::get('estoque/edit/{id}', EstoqueEdit::class)->name('estoque.edit');
Route::get('estoque', EstoqueIndex::class)->name('estoque.index');

Route::get('cadastro/create', CadastroCreate::class)->name('cadastro.create');
Route::get('cadastro/edit/{id}', CadastroEdit::class)->name('cadastro.edit');
Route::get('cadastro', CadastroIndex::class)->name('cadastro.index');