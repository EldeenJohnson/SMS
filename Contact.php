<?php 
    $title = 'Contact Us';
    require_once 'includes/header.php'; ?>

<br><h1 class="text-left text-secondary">Contact Us</h1>

<div class="container overflow-hidden">
<div class="row gx-5">
<div class="col">
<form>
    <div class="form-group ">
      <label>First Name</label>
      <input type="text" class="form-control" id="firstname">
    </div><br>
    <div class="form-group ">
      <label>Last Name</label>
      <input type="text" class="form-control" id="lastname">
    </div><br>
  <div class="form-group ">
      <label for="inputEmail4">Phone</label>
      <input type="phone" class="form-control" id="Phone">
  </div><br>
  <div class="form-group ">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="Email">
  </div><br>
  <div class="form-group ">
    <label for="exampleFormControlTextarea1">Comment or Message</label>
    <textarea class="form-control" id="Textarea" rows="4"></textarea>
  </div>
<br>
  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
</form>
</div>
<div class="col-md-6 col">
          <div class="contact_img-box">
            <img src="images/students.jpg" alt="">
          </div>
        </div>
</div>
</div>

<?php require_once 'includes/footer.php'; ?>
