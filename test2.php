<?php
$registername = htmlspecialchars($_POST['company'], ENT_QUOTES);
print $registername . "さんご登録ありがとうございます";