<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $category
 */
?>
<div class="jumbotron text-center" style="background-color:#00ACC1;">
  <h1 style="font-family:Californian FB;font-size:70px;">Belajar.my</h1>
  <p>We Provide You The Tutor and Their Services</p>
</div>

<div id="services" class="container-fluid text-center">
  <h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">Enhance Your Learning Skills</h1>
  <h4>Easy Peasy Durian Spiky</h4><br>
  <br>
  <div class="row slideanim">
  <!-- starting for loop, to fetch picture id so that can show picture but if still cannot terpaksa (if statement) setiap satu according to data in db -->
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
	  <br /><br />
	</div>
   <?php endforeach; ?>
   </div>
</div>

<!-- Container (Portfolio Section)
can use this for above if statement later on-->
<div id="portfolio" class="container-fluid text-center bg-warning">
<h1 style="color:black;font-family:Berlin Sans FB;font-size:50px;">What We Provide</h1>
  <h4>Anything You Need</h4><br>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="webroot/img/wt.png" alt="" width="400" height="300">
        <p><strong>Editing</strong></p>
        <p>Photoshop 101</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="webroot/img/cs.png" alt="" width="400" height="300">
        <p><strong>Programming</strong></p>
        <p>Learn to Code</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="webroot/img/dm.png" alt="" width="400" height="300">
        <p><strong>Marketing</strong></p>
        <p>Business Strategy</p>
      </div>
    </div>
  </div><br>

  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"The BEST and EASIEST way to learn. I am so happy with the result!"<br><span>Barrack Obama, President of the United States</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Student, University of Oxford</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this website?"<br><span>Chandler Bing,FRIENDS</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Contact Section)
<div id="contact" class="container-fluid">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
-->

<!-- Add Google Maps
<div id="googleMap" style="height:400px;width:100%;"></div>
<script>
      function initMap() {
        var uluru = {lat: 3.157369, lng: 101.711805};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
    -->
	<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
