<?php
session_start();
// store session data
// and set counter for session
if(isset($_SESSION['views'])) //isset - boolean method determines set null or one
 $_SESSION['views']=$_SESSION['views']+1;
else
 $_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
?>
<html>
<body>
<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>
</body>
</html>