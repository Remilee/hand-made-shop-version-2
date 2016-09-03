<?php
//вывод страницы в зависимости от регистрации пользователя 
// $login = true;
// if ($login == false) {
// 	$url = 'registration.php';
// }
// else {
// 	$url = 'auth.php';
// }
// include($url);

$html = <<< END
<div class = "$divClass">
<ul class = "$ulClass">
<li>
END
. $listItem . '</li></ul></div>';
print $html;
?>
