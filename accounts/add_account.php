<?php
    $fp = fopen('accounts.json', 'w');
    fwrite($fp, json_encode($_POST['name']));
    fclose($fp);
?>