<?php 
    $title = 'edit';
    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    $results = $crud->getGender();
    if(!isset($_GET['id'])){
       // echo 'error';
       include 'includes/errormessage.php';
       header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id']; 
        $registrant = $crud->getRegistrantDetails($id);
    
    ?>

    <h1 class="text-center">Edit Record</h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $registrant['registrant_id']?>" />
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" value="<?php echo $registrant['firstname'] ?>" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $registrant['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $registrant['dob'] ?>" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-control" id="gender" name="gender">

           <!-- <option selected><?php //echo $registrant['name'] ?>-->

                <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo $r['gender_id'] ?>" <?php if($r['gender_id'] == $registrant['gender_id']) echo 'selected'?>>
                    <?php echo $r['name']; ?>
                </option>
                <?php } ?>

            </select>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" value="<?php echo $registrant['contactnum'] ?>" id="phone" name="phone" aria-describedby="phoneHelp">
            <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" value="<?php echo $registrant['emailaddress'] ?>" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
    <div >      
            <button type="submit" name="submit" class="btn btn-outline-secondary">Return to List</button>
            <button type="submit" name="submit" class="btn btn-success">Save</button>
    </div>
    </form>
<?php } ?>

<?php require_once 'includes/footer.php'; ?>