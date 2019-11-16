<?php
$message = "This is my password!";
$u_id = "my_id";
$u_pw = "hello_my_password!";

if(isset($_POST['pw'])){
  if($_POST['pw']==$u_pw){
    echo "Yes!!!";
  }
  else{
    echo "No....";
  }
}
?>

</br>Can you find my id/pw?</br>

<form action="" method="post">
password <input type="text" name="pw"> <input type="submit">
</form>
