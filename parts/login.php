      <?php

      session_start();

      //require 'db.php';
      require 'mysql.php';
      if (isset($_POST['username']) and isset($_POST['password'])){
      $db = new Db();
      $username = $db -> quote($_POST['username']);
      $password = $db -> quote( md5($_POST['password']) );
      $res = $db -> select(0,"SELECT * FROM `employee` where `username` = $username and `password` = $password ");
      //print $db->error();
      if ($res[0] == 1){
      $_SESSION['username'] = $_POST['password'];
      header('Location: ../dashboard');
      }else{
      // If the login credentials doesn't match, he will be shown with an error message.
      header('Location: ../index.php?msg=invalid login');
      }
      }


      ?>
