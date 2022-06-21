
*****************
DATABASE AND TABLE 
*****************

-- Database: `codeigniter4_api`

Table structure for table `users`
--

CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(120) DEFAULT NULL,
 `email` varchar(120) DEFAULT NULL,
 `phone_no` varchar(30) DEFAULT NULL,
 `password` varchar(120) DEFAULT NULL,
 `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

---added database file in codeigniter-4 root folder import and run the project 
*****************
Run The Application
******************

you can run the application by following url in postman

http://localhost/api/register --for to register new user.

http://localhost/api/login  ----to user login

http://localhost/api/profile ---for to get user detail using generated <TOKEN>

please check routes.php file