<?php 
    $title = 'Contact Us';
    require_once 'includes/header.php'; ?>

<br><h1 class="text-left text-secondary">Contact Us</h1>

<div class="container overflow-hidden">
<div class="row gx-5">
<div class="col">
<form method="post" enctype="multipart/form-data" action="contactsuccess.php">
    <div class="form-group">
      <label>First Name</label>
      <input required type="text" class="form-control" id="firstname">
    </div><br>
    <div class="form-group ">
      <label>Last Name</label>
      <input required type="text" class="form-control" id="lastname">
    </div><br>
  <div class="form-group ">
      <label for="inputPhone">Phone</label>
      <input required type="phone" class="form-control" id="Phone">
  </div><br>
  <div class="form-group ">
      <label for="inputEmail4">Email</label>
      <input required type="email" class="form-control" id="email" name="email">
  </div><br>
  <div class="form-group ">
    <label for="exampleFormControlTextarea1">Comment or Message</label>
    <textarea class="form-control" id="Textarea" rows="4"></textarea>
  </div>
<br>
  <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
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
