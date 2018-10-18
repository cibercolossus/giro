<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Component $component
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php echo $this->Html->image('logo.png', ['alt' => 'MSC', 'width' => '60%', 'height' => '60%']); ?>
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista Componentes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Sistemas'), ['controller' => 'Systems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Sistema'), ['controller' => 'Systems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Elementes'), ['controller' => 'Elements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Elemento'), ['controller' => 'Elements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="components form large-10 medium-10 columns content">
    <?= $this->Form->create($component) ?>
    <fieldset>
        <legend><?= __('Agregar Componente') ?></legend>
        <?php
            echo $this->Form->control('name',['label' => 'Nombre']);
            echo $this->Form->control('system_id', ['options' => $systems, 'label' => 'Sistema']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
