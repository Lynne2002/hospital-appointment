<?php
namespace App\Validation;
use App\Models\doctorsModel;

class DoctorRules
{

  public function validateUser(string $str, string $fields, array $data){
    $model = new UserModel();
    $doctors = $model->where('email', $data['email'])
                  ->first();

    if(!$doctors)
      return false;

    return password_verify($data['password'], $doctors['password']);
  }
}