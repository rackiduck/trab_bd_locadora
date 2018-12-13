<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorium $categorium
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categorium->identificador_categoria],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->identificador_categoria)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categoria'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Filme'), ['controller' => 'Filme', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Filme'), ['controller' => 'Filme', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoria form large-9 medium-8 columns content">
    <?= $this->Form->create($categorium) ?>
    <fieldset>
        <legend><?= __('Edit Categorium') ?></legend>
        <?php
            echo $this->Form->control('categoria');
            echo $this->Form->control('filme._ids', ['options' => $filme]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
