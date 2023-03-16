<?php

require_once('class/FileServices.php');
require_once('class/Download.php');

if (isset($_POST['submit']) && isset($_FILES['file'])) {
    $fs = new FileServices($_FILES['file']);
    $fs->toJson();
    $download = new Download();
    $download->putContentsFile('./result/pokemon.json', $fs->result);
}