<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorium $categorium
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categorium'), ['action' => 'edit', $categorium->identificador_categoria]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categorium'), ['action' => 'delete', $categorium->identificador_categoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categorium->identificador_categoria)]) ?> </li>
        <li><?= $this->Html->link(__('List Categoria'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorium'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Filme'), ['controller' => 'Filme', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Filme'), ['controller' => 'Filme', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoria view large-9 medium-8 columns content">
    <h3><?= h($categorium->identificador_categoria) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($categorium->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Filme') ?></th>
            <td><?= $categorium->has('filme') ? $this->Html->link($categorium->filme->filme_identificador, ['controller' => 'Filme', 'action' => 'view', $categorium->filme->filme_identificador]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identificador Categoria') ?></th>
            <td><?= $this->Number->format($categorium->identificador_categoria) ?></td>
        </tr>
    </table>
</div>
