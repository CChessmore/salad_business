<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <?php
  #print_r($_SERVER);
  require_once($_SERVER['DOCUMENT_ROOT'].'/salad_business/utils/mysqlclass.php');
  require_once('forms.php');

  $forms = new form;

  if(isset($_POST['email']))
  {
    $mySQL = new MYSQL() ;
    /* change which database that you want to access here. It is the second string entry. */
    $mySQL->connect('localhost','salad_business','root');

    $data=array($_POST['email']);
    $result = $mySQL -> select ('SELECT ID FROM users WHERE email=?',$data);
    #echo $result->rowCount();
    if($result->rowCount() == 0){
     $forms->askEmail($_POST['email']);
    } else {
      $forms->askPassword($_POST['email']);
    }
  }else{
    $forms->askEmail();
  }
  ?>
</body>
</html>
