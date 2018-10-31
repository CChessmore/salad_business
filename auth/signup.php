<?php
$title_name="Sign up";
require('../includes/header.php');
?>

<?php
$db = new PDO('mysql:host=localhost;dbname=salad_business;charset=utf8mb4','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// get value from submit
if(isset($_POST['submit'])) {
    // timezone
    date_default_timezone_set('America/Chicago');
  //get values from input
    $email=$_POST['email'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);

  // Check whether the user exist
    $db_email = $db->prepare("SELECT email FROM users WHERE email = ?");
    
    $db_email->execute(array(
        $email
    ));
    if($db_email->rowCount() == 0) {
        // insert data
        $stmt = $db->prepare("
        INSERT INTO users (email, password) VALUES (:email, :password)
        ");

        $stmt->execute(array(
            ':email'=>$email,
            ':password'=>$password
        ));
        echo "<p>Sign up successfully</p>";
        
    } else {
        echo "This email has already registered.";
    }
} 
?>
<form action="" method="post">
<label>Email</label>
<input type="email" name="email" autocomplete="off" />
<label>Password</label>
<input type="password" name="password" autocomplete="off" />
<input type="submit" name="submit" value="Sign up"/>
</form>
<?php
require('../includes/footer.php');
?>