<?php 
   session_start(); /* Starts the session */
        
   /* Check Login form submitted */        
   if(isset($_POST['Submit'])){
      /* Define username and associated password array */
      //$logins = json_decode(file_get_contents('./data/logins.json'), true);
      $logins = array(
        'dccd96c256bc7dd39bae41a405f25e43' => 'dccd96c256bc7dd39bae41a405f25e43', 
        'c6cc8094c2dc07b700ffcc36d64e2138' => 'c6cc8094c2dc07b700ffcc36d64e2138',
        'a7ce0692519347d641e6834848b08a38' => 'a7ce0692519347d641e6834848b08a38'
      );

      /* Check and assign submitted Username and Password to new variable */
      $Username = md5(isset($_POST['Username']) ? $_POST['Username'] : '');
      $Password = md5(isset($_POST['Password']) ? $_POST['Password'] : '');
      

      /* Check Username and Password existence in defined array */            
      if (isset($logins[$Username]) && $logins[$Username] == $Password){
         /* Success: Set session variables and redirect to Protected page  */
         $_SESSION['UserData']['Username']=$logins[$Username];
         header("location:./pag/index.php");
         exit;
      } else {
         /*Unsuccessful attempt: Set error message */
         $msg="<span style='color:red'>Invalid Login Details</span>";
      }
   }
?>

<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>
