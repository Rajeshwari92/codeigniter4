<?php

namespace App\Controllers;
 
 use CodeIgniter\RESTful\ResourceController;
 use CodeIgniter\API\ResponseTrait;
 use App\Models\EmployeeModel;
  
 class ApiController extends ResourceController
 {
     use ResponseTrait;
     // get all product
     public function index()
     {
         $model = new EmployeeModel();
         $data = $model->findAll();
         return $this->respond($data);
     }
  
     // get single product
     public function show($id = null)
     {
         $model = new EmployeeModel();
         $data = $model->getWhere(['id' => $id])->getResult();
         if($data){
             return $this->respond($data);
         }else{
             return $this->failNotFound('No Data Found with id '.$id);
         }
     }
  
     // create a product
     public function create()
     {
         $model = new EmployeeModel();
         $data = [
             'name' => $this->request->getVar('name'),
             'location' => $this->request->getVar('location')
         ];
         $model->insert($data);
         $response = [
             'status'   => 201,
             'error'    => null,
             'messages' => [
                 'success' => 'Data Saved'
             ]
         ];
         return $this->respondCreated($response);
     }
  
     // update product
     public function update($id = null)
     {
         $model = new EmployeeModel();
         $input = $this->request->getRawInput();
         $data = [
             'name' => $input['name'],
             'location' => $input['location']
         ];
         $model->update($id, $data);
         $response = [
             'status'   => 200,
             'error'    => null,
             'messages' => [
                 'success' => 'Data Updated'
             ]
         ];
         return $this->respond($response);
     }
  
     // delete product
     public function delete($id = null)
     {
         $model = new EmployeeModel();
         $data = $model->find($id);
         if($data){
             $model->delete($id);
             $response = [
                 'status'   => 200,
                 'error'    => null,
                 'messages' => [
                     'success' => 'Data Deleted'
                 ]
             ];
             return $this->respondDeleted($response);
         }else{
             return $this->failNotFound('No Data Found with id '.$id);
         }
          
     }
  
 }
 ?>