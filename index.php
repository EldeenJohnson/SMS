<?php 
    $title = 'Home';
    require_once 'includes/header.php'; ?>
</br>
<div class="card bg-dark text-white">
  <img class="card-img" src="images/ECJ_3828.JPG" alt="Card image">
  <div class="card-img-overlay">
    <h1 class="card-title text-info">Welcome To ABC Academy</h1>
    <h5 class="card-text">Preparing young minds to be leaders of tomorrow...</h5>
    <p class="card-text text-muted">Last updated 3 mins ago</p>
  </div>
</div>
<hr>
<div>
<h1 class="text-center text-warning">Our Services</h1></br>
</div>
<div class="card-deck row">
<div class="col-md-4">
  <div class="card" >
    <img class="card-img-top" src="images/nursery.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nursery</h5>
      <p class="card-text">We take children from 3 months onward.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">After care programs available</small>
    </div>
</div>
  </div>
  <div class="col-md-4">
  <div class="card">
    <img class="card-img-top" src="images/kinder.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Kindergarten</h5>
      <p class="card-text">Starts From K2 to K5</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Ask about our extra-curricular activities.</small>
    </div>
</div>
  </div>
  <div class="col-md-4">
  <div class="card">
    <img class="card-img-top" src="images/ECJ_3827.JPG" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Grades 1-6</h5>
      <p class="card-text">Prepares our Children for the Future</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Smaller classes for better learning.</small>
    </div>
  </div>
  </div>
</div>
<hr>
<div class="text-center">
<a href="registration.php" class="btn btn-warning btn-lg active btn-center text-info" role="button" aria-pressed="true"><h1>Register Now!</h1></a>
</div>



<?php require_once 'includes/footer.php'; ?>