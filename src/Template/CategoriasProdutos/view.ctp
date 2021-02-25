<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto $categoriasProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Editar Categoria'), ['action' => 'edit', $categoriasProduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Exlcuir Categoria'), ['action' => 'delete', $categoriasProduto->id], ['confirm' => __('Deseja realmente excluir o produto com ID#{0}?', $categoriasProduto->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Categorias dos Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Listar Pessoas'), ['controller' => 'pessoas', 'action' => 'index']) ?> </li>    </ul>
</nav>
<div class="categoriasProdutos view large-9 medium-8 columns content">
    <h3><?= h($categoriasProduto->nome_categoria) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Categoria') ?></th>
            <td><?= h($categoriasProduto->nome_categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoriasProduto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($categoriasProduto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($categoriasProduto->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Produtos Relacionados') ?></h4>
        <?php if (!empty($categoriasProduto->produtos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                
                <th scope="col"><?= __('Categorias Produto Id') ?></th>
                <th scope="col"><?= __('Nome Produto') ?></th>
                <th scope="col"><?= __('Quantidade') ?></th>
                <th scope="col"><?= __('Unidade Medida') ?></th>
                <th scope="col"><?= __('Valor') ?></th>
                <th scope="col"><?= __('Perecível') ?></th>
                <th scope="col"><?= __('Validade') ?></th>
                <th scope="col"><?= __('Fabricação') ?></th>

                <th scope="col" class="actions"><?= __('CRUD') ?></th>
            </tr>
            <?php foreach ($categoriasProduto->produtos as $produtos): ?>
            <tr>
                
                <td><?= h($produtos->categorias_produto_id) ?></td>
                <td><?= h($produtos->nome_produto) ?></td>
                <td><?= h($produtos->quantidade) ?></td>
                <td><?= h($produtos->unidade_medida) ?></td>
                <td><?= h($produtos->valor) ?></td>
                <td><?= h($produtos->perecível) ?></td>
                <td><?= h($produtos->validade) ?></td>
                <td><?= h($produtos->fabricação) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver /'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('Deseja realmente excluir o produto #{0}?', $produtos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
