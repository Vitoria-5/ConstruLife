
<div class="mt-5">
    <form class="row g-3" wire:submit.prevent='store'>
        <div class="col-12">
            <label for="nome" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" id="nome_produto" placeholder="EX: Cimento Duro na Queda (marca)..." wire:model='nome_produto'>
        </div>
        
        <div class="col-md-12">
            <label for="qtd_estoque" class="form-label">Descrição do Produto</label>
            <input type="text" class="form-control" id="tipo" placeholder="EX: Cimento Branco, 3kg"
                wire:model='tipo'>
        </div>
        <div class="col-md-12">
            <label for="qtd_minima" class="form-label">Número do Lote</label>
            <input type="text" class="form-control" id="lote" placeholder="EX: C32I-74MT..."
                wire:model='lote'>
        </div>
        <div class="col-12">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control" id="valor" placeholder="EX: R$74,90..." wire:model='valor'>
        </div>
        <div class="col-12">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>