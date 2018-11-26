<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service[]|\Cake\Collection\CollectionInterface $services
 */  echo $this->element('Side_Menu/side_menu');
?>

<div class="services index large-9 medium-8 columns content">
    <h3><?= __('Services') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive table-striped"> <!-- showing all services-->
        <thead>
            <tr>
              <th scope="col" width="5%"><?= $this->Paginator->sort('id') ?></th>
              <th scope="col"><?= $this->Paginator->sort('name') ?></th>
              <th scope="col"><?= $this->Paginator->sort('description') ?></th>
              <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
              <th scope="col" class="actions" width="15%"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($services as $service): ?>
          <tr>
              <td><?= $this->Number->format($service->id) ?></td>
              <td><?= h($service->name) ?></td>
              <td><?= h($service->description) ?></td>
              <td><?= $service->has('category') ? $this->Html->link($service->category->name, ['controller' => 'Categories', 'action' => 'view', $service->category->id]) : '' ?></td>
              <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $service->id], ['class'=>'btn btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id], ['class'=>'btn btn-warning']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id], ['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
              </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
