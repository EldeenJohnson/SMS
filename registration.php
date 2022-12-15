<?php 
    $title = 'registration';
    require_once 'includes/header.php'; ?>

<h1 class="text-center text-info">Register Here!</h1>
<form method="post" enctype="multipart/form-data" action="success.php">
    <div class="mx-5">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div></br>
        <div class="input-group mb-3">
            <label for="gender" class="input-group-text">Gender</label>
            <select required class="form-control" id="gender" name="gender">
            <option selected class="form-text text-muted">Select One</option>
              
            </select>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input required type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="input-group mb-3">        
            <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar">
            <label class="input-group-text" for="avatar">Upload</label>  
        </div>
        <div  class="form-text text-danger">File Upload is Optional</div>  
        <br>
        <div class="d-grid gap-2">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </div>
    </form>

<?php require_once 'includes/footer.php'; ?>