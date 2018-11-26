<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity $activity
 */
  echo $this->element('Side_Menu/side_menu');
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activity->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activity->id)]
            )
        ?></li>
    </ul>
</nav>

<div id="category" class="container-fluid text-center"> <!-- edit Activity -->
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Edit Activity</h1>
  <hr>
  <!-- Activity details section -->
  <div class="row">
    <div class="col-sm-12">
		<div class="row slideanim">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4" style="text-align:left;">
			<?= $this->Form->create($activity) ?>
			<?= $this->Form->control('name', array('type' => 'name', 'class' => 'form-control', 'id' => 'name')); ?>
      <?= $this->Form->control('price', array('type' => 'price', 'class' => 'form-control', 'id' => 'price')); ?>
      <?= $this->Form->control('description', array('type' => 'description', 'class' => 'form-control', 'id' => 'price')); ?>
      <?= $this->Form->control('service_id', ['options' => $services], array('type' => 'service_id', 'class' => 'form-control', 'id' => 'service_id')); ?>
      <?= $this->Form->control('company_id', ['options' => $companies], array('type' => 'company_id', 'class' => 'form-control', 'id' => 'company_id')); ?>
			<br/>
			<?= $this->Form->submit('Submit', array('class' => 'btn btn-info', 'style' => 'float:right;float:bottom;')); ?>
			<?= $this->Form->end(); ?>
		</div>
		<div class="col-sm-3">
		</div>
		</div>
	  </div>
  </div>
</div>
