<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fitum $fitum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fitum->numero_fita],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fitum->numero_fita)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fita'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Filme'), ['controller' => 'Filme', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Filme'), ['controller' => 'Filme', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fita form large-9 medium-8 columns content">
    <?= $this->Form->create($fitum) ?>
    <fieldset>
        <legend><?= __('Edit Fitum') ?></legend>
        <?php
            echo $this->Form->control('filme_identificador', ['options' => $filme]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
