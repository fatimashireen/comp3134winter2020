<?php
 $confirmation=$_SESSION["confirmation"];
 $confirmationPost=$_POST["confirmation"];

    if($confirmation==$confirmationPost){
       echo "Authorized";
    }
     else{
          echo "Unauthorized";
     }
if(isset($_POST["userName"]) && isset($_POST["password"])){
    $userName=$_POST["userName"];
    $password=$_POST["password"];

    if($userName==="host" && $password==="pass"){
       $message="Success";
    }else{
         $message="Failure";
    }
}
?>

<?php
if(isset($message)){echo "<div>".$message."</div>";}
?>

     <form method="post" action="" id="loginForm">
         <div>
             <label for="userName">Username:</label>
             <input type="text" name="userName" id="userName">
        </div>

         <div>
             <label for="password">Password:</label>
             <input type="password" name="password" id="password">
        </div>

        <div class="submit">
             <input type="submit" name="formSubmit" id="formSubmit">
        <div>
   </form>