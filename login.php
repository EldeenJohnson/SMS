<?php 
  $title = 'Login';

  require_once 'includes/header.php';
  require_once 'db/conn.php';

  // check if form submitted
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // define POST variables
    $username = $_POST['username'];
    $password = $_POST['password'];
    $new_password = md5($password.$username);

    // check for existing user
    $result = $users->getUser($username, $new_password);
    
    // if no user, send error message 
    if(!$result) {
      echo '<br><div class="alert alert-danger">username or password is incorrect. Please try again. </div>';
    // if the user exists, define session variables and redirect
    } else {     
      $_SESSION['username'] = $result['username'];
      $_SESSION['userid'] = $result['id'];
      header('Location: viewrecords.php');
    }
  }
?>

<h1 class="text-center"><?php echo $title ?></h1>

<!-- Converting characters into entities are often used to prevent browsers from using it as an HTML element -->
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

    <div class="mb-3">
      <label for="username" class="form-label">Username *</label>
      <input type="username" class="form-control" id="username" name="username" value="<?php if($_SERVER['REQUEST_METHOD'] === 'POST') echo $_POST['username']; ?>">
    </div>

    <div class="mb-3">
      <label for="password">Password: * </label>
      <input type="password" name="password" class="form-control" id="password">
    </div>
  
    <div class="d-grid gap-2">
      <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
    </div>  
  <br>
  <a href="#">Forgot Password</a>
</form>


<?php include_once 'includes/footer.php' ?>