<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Deseja realmente excluir o produto com ID#{0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos view large-9 medium-8 columns content">
    <h3><?= h($produto->nome_produto) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Categorias Produto') ?></th>
            <td><?= $produto->has('categorias_produto') ? $this->Html->link($produto->categorias_produto->nome_categoria, ['controller' => 'CategoriasProdutos', 'action' => 'view', $produto->categorias_produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Produto') ?></th>
            <td><?= h($produto->nome_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade Medida') ?></th>
            <td><?= h($produto->unidade_medida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($produto->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= number_format($produto->valor,2)?></td> 
        </tr>
        <tr>
            <th scope="row"><?= __('Validade') ?></th>
            <td><?= h($produto->validade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fabricação') ?></th>
            <td><?= h($produto->fabricação) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($produto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($produto->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Perecível') ?></th>
            <td><?= $produto->perecível ? __('Sim') : __('Não'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Vendas Relacionadas') ?></h4>
        <?php if (!empty($produto->vendas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                
                <th scope="col"><?= __('Vendedor') ?></th>
               
                <th scope="col"><?= __('Valor Venda') ?></th>
                <th scope="col"><?= __('Criada') ?></th>
               
                <th scope="col" class="actions"><?= __('CRUD') ?></th>
            </tr>
            <?php foreach ($produto->vendas as $vendas): ?>
            <tr>
                
                <td><?= h($vendas->vendedor) ?></td>
                
                <td><?= h($vendas->valor_venda) ?></td>
                <td><?= h($vendas->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver /'), ['controller' => 'Vendas', 'action' => 'view', $vendas->id]) ?>
                    <?= $this->Html->link(__('Editar /'), ['controller' => 'Vendas', 'action' => 'edit', $vendas->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Vendas', 'action' => 'delete', $vendas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
