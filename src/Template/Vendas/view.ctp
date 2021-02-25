<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Venda'), ['action' => 'edit', $venda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Venda'), ['action' => 'delete', $venda->id], ['confirm' => __('Deseja realmente excluir o produto com ID#{0}?', $venda->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Venda'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendas view large-9 medium-8 columns content">
    <h3><?= h($venda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pessoa') ?></th>
            <td><?= $venda->has('pessoa') ? $this->Html->link($venda->pessoa->Nome, ['controller' => 'Pessoas', 'action' => 'view', $venda->pessoa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Produto') ?></th>
            <td><?= $venda->has('produto') ? $this->Html->link($venda->produto->nome_produto, ['controller' => 'Produtos', 'action' => 'view', $venda->produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Cliente') ?></th>
            <td><?= h($venda->nome_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($venda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Venda') ?></th>
            <td><?= $this->Number->format($venda->valor_venda) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criada') ?></th>
            <td><?= h($venda->created) ?></td>
        </tr>
    </table>
</div>
