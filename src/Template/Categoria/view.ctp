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
    <h3><?= h($categorium->categoria) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($categorium->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Identificador Categoria') ?></th>
            <td><?= $this->Number->format($categorium->identificador_categoria) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Filme') ?></h4>
        <?php if (!empty($categorium->filme)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Filme Identificador') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Disponivel') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categorium->filme as $filme): ?>
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
