<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ator $ator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ator'), ['action' => 'edit', $ator->identificador_ator]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ator'), ['action' => 'delete', $ator->identificador_ator], ['confirm' => __('Are you sure you want to delete # {0}?', $ator->identificador_ator)]) ?> </li>
        <li><?= $this->Html->link(__('List Ator'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ator'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Filme'), ['controller' => 'Filme', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Filme'), ['controller' => 'Filme', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ator view large-9 medium-8 columns content">
    <h3><?= h($ator->identificador_ator) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Real') ?></th>
            <td><?= h($ator->nome_real) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Ficticio') ?></th>
            <td><?= h($ator->nome_ficticio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identificador Ator') ?></th>
            <td><?= $this->Number->format($ator->identificador_ator) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nascimento') ?></th>
            <td><?= h($ator->nascimento) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Filme') ?></h4>
        <?php if (!empty($ator->filme)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Filme Identificador') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Disponivel') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ator->filme as $filme): ?>
            <tr>
                <td><?= h($filme->filme_identificador) ?></td>
                <td><?= h($filme->titulo) ?></td>
                <td><?= h($filme->disponivel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Filme', 'action' => 'view', $filme->filme_identificador]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Filme', 'action' => 'edit', $filme->filme_identificador]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Filme', 'action' => 'delete', $filme->filme_identificador], ['confirm' => __('Are you sure you want to delete # {0}?', $filme->filme_identificador)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
