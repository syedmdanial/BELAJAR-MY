<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
   echo $this->element('Side_Menu/side_menu');
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $service->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]
            )
        ?></li>
    </ul>
</nav>
<div id="category" class="container-fluid text-center"> <!-- edting Services -->
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Edit a Service</h1>
  <hr>
  <!-- services details section -->
  <div class="row">
    <div class="col-sm-12">
		<div class="row slideanim">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4" style="text-align:left;">
			<?= $this->Form->create($service) ?>
			<?= $this->Form->control('name', array('type' => 'name', 'class' => 'form-control', 'id' => 'name')); ?>
      <?= $this->Form->control('description', array('type' => 'description', 'class' => 'form-control', 'id' => 'description')); ?>
      <?= $this->Form->control('category_id', ['options' => $categories], array('type' => 'category_id', 'class' => 'form-control', 'id' => 'category_id')); ?>
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
