<?php
$ui = shell_exec("py.py");
if($ui){
	echo $ui;
}else{
	echo "unknow Error";
}

?>
