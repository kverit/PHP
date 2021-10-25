DROP DATABASE IF EXISTS EKhwDataBase;
CREATE DATABASE EKhwDataBase;

USE EKhwDataBase;

DROP TABLE IF EXISTS images;
CREATE TABLE images(
    id SERIAL,
    image_path VARCHAR(255),
    viewed BIGINT UNSIGNED,
    image_name VARCHAR(255)
);

INSERT INTO images (image_path, viewed, image_name) 
    VALUES 
        ('/image/img1.jpg', 0, 'snowball'),
        ('/image/img2.jpg', 0, 'lights'),
        ('/image/img3.jpg', 0, 'Christmas tree')
;