<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('Deseja realmente excluir o produto com ID#{0}?', $produto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Categorias Produtos'), ['controller' => 'CategoriasProdutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['controller' => 'Vendas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="produtos form large-9 medium-8 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Editar Produto') ?></legend>
        <?php
            echo $this->Form->control('categorias_produto_id', ['options' => $categoriasProdutos]);
            echo $this->Form->control('nome_produto');
            echo $this->Form->control('quantidade');
            echo $this->Form->control('unidade_medida');
            echo $this->Form->control('valor');
            echo $this->Form->control('perecível');

            echo $this->Form->control('validade', ['empty' => true]);
            echo $this->Form->control('fabricação', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->button(__('Cancelar'),array ('type'=>'reset'))?>
    <?= $this->Form->end() ?>

</div>
