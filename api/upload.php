<?php
require './AjaxUpload.class.php';
if ($_POST) {
    $form_name = $_GET['form_name'];
    $file_size = intval($_GET['file_size']);
    $upload = new AjaxUpload($form_name, $file_size);
}
?>