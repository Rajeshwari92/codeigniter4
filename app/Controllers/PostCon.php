<?php

namespace App\Controllers;

use App\Models\Post;

use CodeIgniter\RESTful\ResourceController;

class PostCon extends ResourceController

{

/**

* Return an array of resource objects, themselves in array format

*

* @return mixed

*/

public function index()

{

$response_data=[

"error" => false,

"message" => "success",

"status" => "Success",

"status_code" => 200,

"data" => []

];

return $this->respond($response_data);

}

public function getdata()

{

try

{

$post = new Post();

$user = $post->withDeleted()->findAll();

$response_data=[

"error" => false,

"message" => "success",

"status" => "Success",

"status_code" => 200,

"data" => $user

];

return $this->respond($response_data);

} catch (\Exception $e) {

$response_data=[

"error" => false,

"message" => $e->getMessage(),

"status" => "Success",

"status_code" => 200,

"data" => $user

];
//log_message('info','dint find table ');
return $this->respond($response_data);

}

}

public function insert()

{

try

{

$post = new Post();

$data['name'] = "test";

$post->save($data);

$response_data=[

"error" => false,

"message" => 'Data inserted successfully',

"status" => "Success",

"status_code" => 200,

"data" => $data

];

return $this->respond($response_data);

} catch (\Exception $e) {

$response_data=[

"error" => false,

"message" => $e->getMessage(),

"status" => "Success",

"status_code" => 200,

"data" => []

];

return $this->respond($response_data);

}

}

public function updatedata()

{

try

{

$post = new Post();

$post->set('name', 'tessssteing');

$post->where('id', 2);

$post->update();

$response_data=[

"error" => false,

"message" => 'Data Updated successfully',

"status" => "Success",

"status_code" => 200,

"data" => []

];

return $this->respond($response_data);

} catch (\Exception $e) {

$response_data=[

"error" => false,

"message" => $e->getMessage(),

"status" => "Success",

"status_code" => 200,

"data" => []

];

return $this->respond($response_data);

}

}

public function deletePost()

{

try

{

$post = new Post();

$post->where('id', 1)->delete();

$response_data=[

"error" => false,

"message" => 'Data deleted successfully',

"status" => "Success",

"status_code" => 200,

"data" => []

];

return $this->respond($response_data);

} catch (\Exception $e) {

$response_data=[

"error" => false,

"message" => $e->getMessage(),

"status" => "Success",

"status_code" => 200,

"data" => []

];

return $this->respond($response_data);

}

}

public function passdatabyurl($num1,$num2)

{

//Get data from the url

echo $num1;

echo $num2;

die;

}

public function passdatabyformdata()

{

//get data from the form data

$data = $this->request->getPost();

print_r(json_decode(json_encode($data),true));

die;

}

public function getdatabyrowjson()

{

//get data from the json format

$data = $this->request->getJSON();

print_r(json_decode(json_encode($data),true));

die;

}

}