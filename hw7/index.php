<?php

/*1. Создать модуль корзины. В нее можно добавлять товары, а можно удалять.
| Запрос | Данные запроса | Данные ОК ответа | Данные ответа с ошибкой | Данные ОК ответа JSON | Данные ответа JSON с ошибкой | Комментарий |
|--------------------------|--------------------------------------|------------------|-------------------------|-----------------------|-----------------------------------------------------|---------------------------------------------------------------------------------------|
| Добавить товар в корзину | {"id_product" : 123, "quantity" : 1} | (string) 1 | (string) 0 | { result: 1 } | { result: 0, errorMessage : "Сообщение об ошибке" } | Подразумевается, что целевая корзина пользователя идентифицируется на стороне сервера |
| Удалить товар из корзины | {"id_product" : 123} | (string) 1 | (string) 0 | { result: 1 } | { result: 0, errorMessage : "Сообщение об ошибке" } | |

Использовать сущность good в качестве товара.*/

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bascketForm {
            display: flex;
            flex-direction: column;
        }
        .bascketForm input {
            width: 150px;
        }
    </style>
</head>
<body>
    <div class="bascketForm">
        
        <form class="bascketForm" method="post" enctype="multipart/form-data" action="request.php">
            <input type="hidden" name="product_id" value="1">
            <input type="hidden" name="image_path" value="/image/customer1.jpg">
            <a href="#"><img src="/image/customer1.jpg" alt="prod1"></a>
            <input type="submit" name="action" value="add">
            <input type="submit" name="action" value="remove">
        </form>
        <form class="bascketForm" method="post" enctype="multipart/form-data" action="request.php">
            <input type="hidden" name="product_id" value="2">
            <input type="hidden" name="image_path" value="/image/customer2.jpg">
            <a href="#"><img src="/image/customer2.jpg" alt="prod1"></a>
            <input type="submit" name="action" value="add">
            <input type="submit" name="action" value="remove">
        </form>
    </div> 
    <div></div>
</body>
</html>
