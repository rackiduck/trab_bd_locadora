<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ator $ator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ator'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Filme'), ['controller' => 'Filme', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Filme'), ['controller' => 'Filme', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ator form large-9 medium-8 columns content">
    <?= $this->Form->create($ator) ?>
    <fieldset>
        <legend><?= __('Add Ator') ?></legend>
        <?php
            echo $this->Form->control('nome_real');
            echo $this->Form->control('nascimento', ['empty' => true]);
            echo $this->Form->control('nome_ficticio');
            echo $this->Form->control('filme._ids', ['options' => $filme]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
