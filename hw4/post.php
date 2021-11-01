<?php
$uploaddir = '/var/www/html/superdomain/image';
$uploadfile = basename($_FILES['userfile']['name']);


if ($_FILES['userfile']['size'] > 300000){
    echo "Превышен допустимый размер файла";
} else if ($_FILES['userfile']['type'] !== 'image/jpeg') {
    echo "Файл некорректен";
} else if (!move_uploaded_file($_FILES['userfile']['tmp_name'], "$uploaddir/$uploadfile")) {
    echo "error";
}

/* ЗАГРУЗКА ФАЙЛОВ НЕ ПРОИСХОДИТ, ВЫДАЕТ "error". ПРОВЕРКА НА ОШИБКИ ВЫДАЕТ "ОК". 

   
switch ($_FILES['upfile']['error']) {
    case UPLOAD_ERR_OK:
        echo 'ok'
        break;
    case UPLOAD_ERR_NO_FILE:
        echo '1';
    case UPLOAD_ERR_INI_SIZE:
    case UPLOAD_ERR_FORM_SIZE:
        echo '2';
    default:
        echo '3';
}
*/
;

