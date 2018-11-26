<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $category
 */
?>
<div id="services" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;"><?php echo $catName; ?></h1>
  <h4>Make Your Dreams Come True</h4><br>
  <br>
  <div class="row">
    <div style="text-align:left;border-right: 1px solid #ccc;" class="col-sm-2" >
		<h4 style="font-weight:bold;margin-bottom:10px;"><?php echo $catName; ?></h4>
		<?php foreach ($service as $servs): ?>
			<a style="color:grey;"><?= $this->Html->link(__($servs->name), ['controller' => 'activities', 'action' => 'allcollection', $servs->id, $servs->name]) ?></a><br>
		<?php endforeach; ?>
    </div>
	<div class="col-sm-10"> <!-- listing all services under the same category -->
	  <div class="row slideanim">
	  <?php $counter = 1;
			foreach ($service as $serv):
			if($counter == 4 || $counter == 5 || $counter == 9 || $counter == 10 ):?>
				<div class="col-sm-6">

					  <h4><?= $this->Html->link(__($serv->name), ['controller' => 'activities', 'action' => 'allcollection', $serv->id, $serv->name], ['style' => 'color:black;text-decoration:none;']) ?></h4>
				</div>
			<?php else: ?>
				<div class="col-sm-4">

				  <h4><?= $this->Html->link(__($serv->name), ['controller' => 'activities', 'action' => 'allcollection', $serv->id, $serv->name], ['style' => 'color:black;text-decoration:none;']) ?></h4>
				</div>
			<?php endif;
			$counter++;
			endforeach; ?>
	  </div>
	</div>
	</div>
</div>
