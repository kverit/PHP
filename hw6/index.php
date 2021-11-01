<!DOCTYPE html>
<html lang="en">
<style>
    .reviewsForm {
        display: flex;
        margin-top: 30px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="/index.php">
        <input type="number" name="arg1">
        <input type="number" name="arg2">
        
        <select name="operation" >
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="mult">*</option>
            <option value="seg">/</option>
        </select>
        
        <input type="submit" value="calculate it">
        <span> <?php echo calculate();  ?>  </span>
    </form>
    <br/>
    <form method="post" enctype="multipart/form-data" action="/index.php">
        <input type="number" name="arg1">
        <input type="number" name="arg2">
        
        <input type="submit" name="operation" value="plus">
        <input type="submit" name="operation" value="minus">
        <input type="submit" name="operation" value="mult">
        <input type="submit" name="operation" value="seg">
        <span> <?php echo calculate();  ?>  </span>
    </form>
    

    <form action="/index.php" method="post" enctype="multipart/form-data">
        <input type="text" name="review">
        <input type="submit" value="send">
    </form>
    
<?php  
    
    $link = mysqli_connect('localhost', 'root', 'password', 'EKhwDataBase' );

    function calculate(){
        $operand1 = $_POST['arg1'];
        $operand2 = $_POST['arg2'];
        $operation = $_POST['operation'];
        switch($operation){
            case 'plus':
                $result = $operand1 + $operand2;
                return $result;
                break;
            case 'minus':
                $result = $operand1 - $operand2;
                return $result;
                break;
            case 'mult':
                $result = $operand1 * $operand2;
                return $result;
                break;
            case 'seg':
                $result = $operand1 / $operand2;
                return $result;
                break;
        }
    }
    
    if ($_POST['review'] ?? null){
        $review = $_POST['review'];
        $sendToDB = mysqli_query($link, "insert into reviews (customer_review) values (' $review ')");
    }

    $result = mysqli_query($link, 'select * from reviews ');
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="reviewsForm">' ;
        echo '<a href="#" >';
        echo '<img width="100" height="100" src="' . $row['customer_img'] . '">';
        echo '<a/>'; 
        echo '<span> ' . $row['customer_review'] . '</span>';
        echo '</div>';
    };

    mysqli_close($link);

?>
</body>
</html>
