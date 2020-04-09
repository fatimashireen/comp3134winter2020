<?php
$_SESSION["confirmation"]=random_int(0,1000);
?>
<html>
 <body onload="javascript:document.forms[0].submit()">
 <form method="POST" name="form0" action="csfr_action.php">
 <input type="text" name="userName" value="host"/>
 <input type="text" name="password" value="pass"/>
 <input type="submit" name="formSubmit" id="formSubmit"/>
 <input type="hidden" name="confirmation" value=<?php $_SESSION["confirmation"]?>/>
 </form>
 </body>
 </html>