DROP DATABASE IF EXISTS EKhwDataBase;
CREATE DATABASE EKhwDataBase;

USE EKhwDataBase;

DROP TABLE IF EXISTS images;

DROP TABLE IF EXISTS reviews;
CREATE TABLE reviews(
    id SERIAL,
    customer_id BIGINT UNSIGNED ,
    customer_img VARCHAR(255) DEFAULT '/image/img1.jpg',
    customer_review VARCHAR(255),
    created_at DATETIME DEFAULT NOW()
);

INSERT INTO reviews (customer_id, customer_img, customer_review)
    VALUES
        (1, '/image/customer1.jpg', 'Incredible!'),
        (2, '/image/customer2.jpg', 'Awesome!'),
        (3, '/image/customer3.jpg', 'Excellent!')
;