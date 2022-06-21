
*****************
DATABASE AND TABLE 
*****************

-- Database: `person_detail`

Table structure for table `person_info`
--

CREATE TABLE `person_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL ,
   PRIMARY KEY  (id)
	) $charset_collate;";

---added database file in ci4 folder import and run the project 
*****************
Run The Application
******************

you can run the application by following url in postman with appropriate methods

http://localhost/codeigniter-4-restapi/ApiController

--create/register new user use above url with POST method and insert data in X-www-form-urlencoded

--retrive all user info use above url with GET method 

--update/edit perticular user use above http://localhost/codeigniter-4-restapi/ApiController/<id value> with PUT method and insert data in X-www-form-urlencoded

--delete perticular user use above http://localhost/codeigniter-4-restapi/ApiController/<id value> with DELETE method 