<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emprestimo'), ['action' => 'edit', $emprestimo->identificador_emp]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emprestimo'), ['action' => 'delete', $emprestimo->identificador_emp], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->identificador_emp)]) ?> </li>
        <li><?= $this->Html->link(__('List Emprestimo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cliente'), ['controller' => 'Cliente', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Cliente', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Filme'), ['controller' => 'Filme', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Filme'), ['controller' => 'Filme', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emprestimo view large-9 medium-8 columns content">
    <h3><?= h($emprestimo->identificador_emp) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
            <td><?= $emprestimo->has('cliente') ? $this->Html->link($emprestimo->cliente->numero_associado, ['controller' => 'Cliente', 'action' => 'view', $emprestimo->cliente->numero_associado]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Filme') ?></th>
            <td><?= $emprestimo->has('filme') ? $this->Html->link($emprestimo->filme->filme_identificador, ['controller' => 'Filme', 'action' => 'view', $emprestimo->filme->filme_identificador]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identificador Emp') ?></th>
            <td><?= $this->Number->format($emprestimo->identificador_emp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Devolucao') ?></th>
            <td><?= h($emprestimo->devolucao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saida') ?></th>
            <td><?= h($emprestimo->saida) ?></td>
        </tr>
    </table>
</div>
