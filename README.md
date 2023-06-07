
# PHP Feedback Webpage

Experience our PHP-based feedback webpage powered by MySQL. Easily submit your thoughts and suggestions through a user-friendly interface. Our secure database stores all feedback for efficient analysis and improvement. Trust our reliable and scalable platform for valuable insights and enhanced customer satisfaction.


## Appendix

The website contains 3 main sections:

+ **Index.php**: The main front cover of the website, where users enter their name, email and feedback.

+ **Feedback.php**: This page displays all past feedbacks of previous users. The order of displayed feedbacks is from oldest to latest.
 
+ **About.php**: This page shows a brief description about this feedback website. 


## Author

[@minwang916](https://github.com/minWang916)


## Demo

![ezgif com-video-to-gif](https://github.com/minWang916/PHP_feedback/assets/116493016/33e929c7-dda0-4fbb-8c6d-2110bd6bb9e2)


## Screenshots


### Index.php

![index](https://github.com/minWang916/PHP_feedback/assets/116493016/18e89034-2d8e-436f-be21-115afcfa00a2)


### Feedback.php

![feedback](https://github.com/minWang916/PHP_feedback/assets/116493016/3c8e1b0a-197a-4ad5-9d0e-3318d0cd24a6)

### About.php

![about](https://github.com/minWang916/PHP_feedback/assets/116493016/a0c2ad90-eafb-4d79-a54d-7a5779e4da56)

## Tech Stack

**Front End:** ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white), ![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)

**Back End:** ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white), ![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)


## Installation

To use this project, simply download and put the files inside the **htdocs** folder of your XAMPP folder. Note: You have to import the **feedback.sql** database to your local MySQL to run this project and change the **config.php** file (to your local user) to connect **index.php** with **feedback.sql**.

![icon](https://github.com/minWang916/PHP_feedback/assets/116493016/c14def57-bd97-46b7-82cf-fc412441e21a)


```php
<?php
#define('DB_HOST','<your_host>');
#define('DB_USER','<your_user_name>');
#define('DB_PASS','<your_password>');
#define('DB_NAME','<your_database_name>');

define('DB_HOST','localhost');
define('DB_USER','taikhoan916');
define('DB_PASS','matkhau916');
define('DB_NAME','php_dev');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error){
    die('Connection Error'.$conn->connect_error);
}
?>
```
    
## Deployment

To run this project, use XAMPP Apache server to host.

![panel](https://github.com/minWang916/PHP_feedback/assets/116493016/6fb2b0f7-c33e-4d51-ada0-f111bf1054bf)

