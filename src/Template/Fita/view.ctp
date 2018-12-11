<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fitum $fitum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fitum'), ['action' => 'edit', $fitum->numero_fita]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fitum'), ['action' => 'delete', $fitum->numero_fita], ['confirm' => __('Are you sure you want to delete # {0}?', $fitum->numero_fita)]) ?> </li>
        <li><?= $this->Html->link(__('List Fita'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fitum'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Filme'), ['controller' => 'Filme', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Filme'), ['controller' => 'Filme', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fita view large-9 medium-8 columns content">
    <h3><?= h($fitum->numero_fita) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Filme') ?></th>
            <td><?= $fitum->has('filme') ? $this->Html->link($fitum->filme->filme_identificador, ['controller' => 'Filme', 'action' => 'view', $fitum->filme->filme_identificador]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Fita') ?></th>
            <td><?= $this->Number->format($fitum->numero_fita) ?></td>
        </tr>
    </table>
</div>
