<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $category
 */
?>
<div id="services" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Service Categories</h1>
  <h4>Simplify Your Life</h4><br>
  <br>
  <div class="row slideanim">
  <?php foreach ($category as $category): ?>
    <div class="col-sm-4">
      <?php if($category->id == 1){ ?>
        <a href="services/listservice/<?php echo $category->id . '/' . $category->name; ?>"><img class="img-rounded" width="60%" src="webroot/img/gd.png"></a>
        <h4><?= $this->Html->link(__($category->name), ['controller' => 'services', 'action' => 'listservice', $category->id, $category->name], ['style' => 'color:black;text-decoration:none;']) ?></h4>
      <?php }elseif($category->id == 2){ ?>
          <a href="services/listservice/<?php echo $category->id . '/' . $category->name; ?>"><img class="img-rounded" width="60%" src="webroot/img/vm.png"></a>
          <h4><?= $this->Html->link(__($category->name), ['controller' => 'services', 'action' => 'listservice', $category->id, $category->name], ['style' => 'color:black;text-decoration:none;']) ?></h4>
        <?php }else{ ?>
          <a href="services/listservice/<?php echo $category->id . '/' . $category->name; ?>"><img class="img-rounded" width="60%" src="webroot/img/pg.png"></a>
          <h4><?= $this->Html->link(__($category->name), ['controller' => 'services', 'action' => 'listservice', $category->id, $category->name], ['style' => 'color:black;text-decoration:none;']) ?></h4>
      <?php } ?>
	</div>
   <?php endforeach; ?>
   </div>
</div>
