<?php

$uname = "shagun";
$psw = "shagun123";

if(isset($_POST['uname'])&&
	isset($_POST['psw'])) {
    if($_POST["uname"] == $uname && $_POST["psw"] == $psw) {
        echo "Login successful";
    
?>
<br/>
<center>
<a href="http://localhost/project/choice.html"><font size=7><b>NEXT</b><font></a>
</center>
<?php
	}
     else {
        echo "Incorrect Login";
    }
}

?>