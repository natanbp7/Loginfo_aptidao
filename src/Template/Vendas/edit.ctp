<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Form->postLink(
                __('Excluir Venda'),
                ['action' => 'delete', $venda->id],
                ['confirm' => __('Deseja realmente excluir a venda com ID#{0}?', $venda->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Vendas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="vendas form large-9 medium-8 columns content">
    <?= $this->Form->create($venda) ?>
    <fieldset>
        <legend><?= __('Editar Venda') ?></legend>
        <?php
            echo $this->Form->control('pessoa_id', ['options' => $pessoas]);
            echo $this->Form->control('produto_id', ['options' => $produtos]);
            echo $this->Form->control('valor_venda');
            echo $this->Form->control('nome_cliente');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->button(__('Cancelar'),array ('type'=>'reset'))?>
    <?= $this->Form->end() ?>
</div>
