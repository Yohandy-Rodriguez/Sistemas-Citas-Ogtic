<?php

include("con_db_php");
if (insert('post'[registro])){
    if(strlen($_POST["name"])> 1 && strlen(trim($_POST['email']))< 1){
        $_POST['name'] = trim($_POST['name']);
        $_POST['email'] = trim($_POST['email']);
        $_POST['text'] = trim($_POST['text']);
}
?>