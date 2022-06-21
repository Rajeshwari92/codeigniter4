
*****************
DATABASE AND TABLE 
*****************

-- Database: `ci4_restapi`

Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  
   PRIMARY KEY  (id)
	) $charset_collate;";

---added database file in ci4-restapi root folder import and run the project 
*****************
Run The Application
******************

you can run the application by following url

http://localhost/ci4-restapi/getdata

please check routes.php file