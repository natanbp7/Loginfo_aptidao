


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li><img src="webroot/img/unnamed.png"></li>
    <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Nova Venda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Categorias dos Produtos'), ['controller' => 'CategoriasProdutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="vendas index large-9 medium-8 columns content">
    <h3><?= __('Vendas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('pessoa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_venda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendas as $venda): ?>
            <tr>
                
                <td><?= $venda->has('pessoa') ? $this->Html->link($venda->pessoa->Nome, ['controller' => 'Pessoas', 'action' => 'view', $venda->pessoa->id]) : '' ?></td>
                <td><?= number_format($venda->valor_venda,2)?></td>         
                <td><?= h($venda->nome_cliente) ?></td>
                <td><?= h($venda->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver /'), ['action' => 'view', $venda->id]) ?>
                    <?= $this->Html->link(__('Editar /'), ['action' => 'edit', $venda->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
    <ul class="pagination">
           <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}')]) ?></p>
    </div>
</div>
