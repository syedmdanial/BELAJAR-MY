<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity[]|\Cake\Collection\CollectionInterface $activities
 */
  echo $this->element('Side_Menu/side_menu');
?>
<div class="activities index large-9 medium-8 columns content">
    <h3><?= __('Activities') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive table-striped"> <!-- showing all Activities-->
        <thead>
            <tr>
              <th scope="col" width="5%"><?= $this->Paginator->sort('id') ?></th>
              <th scope="col"><?= $this->Paginator->sort('name') ?></th>
              <th scope="col"><?= $this->Paginator->sort('price') ?></th>
              <th scope="col"><?= $this->Paginator->sort('created') ?></th>
              <th scope="col"><?= $this->Paginator->sort('description') ?></th>
              <th scope="col"><?= $this->Paginator->sort('service_id') ?></th>
              <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
              <th scope="col" class="actions" width="20%"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($activities as $activity): ?>
          <tr>
            <td><?= $this->Number->format($activity->id) ?></td>
            <td><?= h($activity->name) ?></td>
            <td><?= $this->Number->format($activity->price) ?></td>
            <td><?= h($activity->created) ?></td>
            <td><?= h($activity->description) ?></td>
            <td><?= $activity->has('service') ? $this->Html->link($activity->service->name, ['controller' => 'Services', 'action' => 'view', $activity->service->id]) : '' ?></td>
            <td><?= $activity->has('company') ? $this->Html->link($activity->company->name, ['controller' => 'Companies', 'action' => 'view', $activity->company->id]) : '' ?></td>
              <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $activity->id], ['class'=>'btn btn-default']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activity->id], ['class'=>'btn btn-warning']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $activity->id], ['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $activity->id)]) ?>
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
