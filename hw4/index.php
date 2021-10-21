<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./image/img1.jpg" target="_blank">
        <img src="./image/img1.jpg" alt="img">
    </a>
    <a href="./image/img2.jpg" target="_blank">
        <img src="./image/img2.jpg" alt="img">
    </a>
    <a href="./image/img3.jpg" target="_blank">
        <img src="./image/img3.jpg" alt="img" width="240">
    </a>
    
    <form enctype="multipart/form-data" method="POST" action="./post.php"> 
		<input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
        <input name="userfile" type="file" />
		<input type="submit" value="Загрузить"/>
	</form>

    <?php 
        $images = scandir('./image');
        foreach($images as $image) {
            if(is_file('image/' . $image)){
                ?>
                <a href="./image/<?php echo $image; ?>" target="_blank">
                    <img src="./image/<?php echo $image; ?>" alt="img" width="240">
                </a>
                <?php
            }
        }
    
    ?>
</body>
</html>