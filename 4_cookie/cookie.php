<html>
<?php
$expire=time()+10*0*0*0;
setcookie("user", "Alex Porter", time()+3600);
// Print a cookie
echo $_COOKIE["user"];
// A way to view all cookies
print_r($_COOKIE);
?>
<html>
