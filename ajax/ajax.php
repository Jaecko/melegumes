<?php
session_start();

$tableData = json_decode($_POST['tab']);
foreach ($tableData->data as $key => $value) {
    foreach ($value as $k => $v) {
        $_SESSION['panier'][$key]->$k = $v;
        // echo $v;
    }
}

