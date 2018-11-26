<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
   echo $this->element('Side_Menu/side_menu');
?>
<div id="category" class="container-fluid text-center">  <!-- create new category-->
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Create Categories</h1>
  <hr>
  <!-- category filling details section -->
  <div class="row">
    <div class="col-sm-12">
		<div class="row slideanim">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4" style="text-align:left;">
			<?= $this->Form->create($category) ?>
      .
			<?= $this->Form->control('name', array('type' => 'name', 'class' => 'form-control', 'id' => 'name')); ?>
			<?= $this->Form->submit('Submit', array('class' => 'btn btn-info', 'style' => 'float:right;float:bottom;')); ?>
			<?= $this->Form->end(); ?>
		</div>
		<div class="col-sm-3">
		</div>
		</div>
	</div>
</div>
</div>
