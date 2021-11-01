<?php
session_start();

// Не получилось добавить удаление товара

$product_id = $_POST['product_id'];
$image_path = $_POST['image_path'];
$action = $_POST['action'];

    if(isset($product_id)) {
        if(!isset($_SESSION['bascket'])){
            $_SESSION['bascket'] =  array('product_id' => [],
                                         'image_path' => [],
                                    );
        }
        
        if(!in_array($product_id, $_SESSION['bascket']['product_id'])) {
            array_push($_SESSION['bascket']['product_id'], $product_id);
            array_push($_SESSION['bascket']['image_path'], $image_path);
        }
    }

for ($i = 0 ; $i < count($_SESSION['bascket']['product_id']); $i++ ) { 
       echo '<a href="#"><img  width="100" height="100" src="'. $_SESSION['bascket']['image_path'][$i] .'" alt="prod1"></a>';
       echo '<span>Some text</span>';
    }

