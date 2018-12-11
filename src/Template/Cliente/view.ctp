<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->numero_associado]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->numero_associado], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->numero_associado)]) ?> </li>
        <li><?= $this->Html->link(__('List Cliente'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emprestimo'), ['controller' => 'Emprestimo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emprestimo'), ['controller' => 'Emprestimo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ator'), ['controller' => 'Ator', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ator'), ['controller' => 'Ator', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cliente view large-9 medium-8 columns content">
    <h3><?= h($cliente->numero_associado) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sobrenome') ?></th>
            <td><?= h($cliente->Sobrenome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenome') ?></th>
            <td><?= h($cliente->prenome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($cliente->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($cliente->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($cliente->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rua') ?></th>
            <td><?= h($cliente->rua) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($cliente->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone1') ?></th>
            <td><?= h($cliente->telefone1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Associado') ?></th>
            <td><?= $this->Number->format($cliente->numero_associado) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ator') ?></h4>
        <?php if (!empty($cliente->ator)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Nome Real') ?></th>
                <th scope="col"><?= __('Nascimento') ?></th>
                <th scope="col"><?= __('Nome Ficticio') ?></th>
                <th scope="col"><?= __('Identificador Ator') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->ator as $ator): ?>
            <tr>
                <td><?= h($ator->nome_real) ?></td>
                <td><?= h($ator->nascimento) ?></td>
                <td><?= h($ator->nome_ficticio) ?></td>
                <td><?= h($ator->identificador_ator) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ator', 'action' => 'view', $ator->identificador_ator]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ator', 'action' => 'edit', $ator->identificador_ator]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ator', 'action' => 'delete', $ator->identificador_ator], ['confirm' => __('Are you sure you want to delete # {0}?', $ator->identificador_ator)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Emprestimo') ?></h4>
        <?php if (!empty($cliente->emprestimo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Identificador Emp') ?></th>
                <th scope="col"><?= __('Devolucao') ?></th>
                <th scope="col"><?= __('Saida') ?></th>
                <th scope="col"><?= __('Numero Associado') ?></th>
                <th scope="col"><?= __('Filme Identificador') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->emprestimo as $emprestimo): ?>
            <tr>
                <td><?= h($emprestimo->identificador_emp) ?></td>
                <td><?= h($emprestimo->devolucao) ?></td>
                <td><?= h($emprestimo->saida) ?></td>
                <td><?= h($emprestimo->numero_associado) ?></td>
                <td><?= h($emprestimo->filme_identificador) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Emprestimo', 'action' => 'view', $emprestimo->identificador_emp]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Emprestimo', 'action' => 'edit', $emprestimo->identificador_emp]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emprestimo', 'action' => 'delete', $emprestimo->identificador_emp], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->identificador_emp)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
