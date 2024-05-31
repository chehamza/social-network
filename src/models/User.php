<?php
class User extends userRepository {
 private$id;
 private $name;
 private $firstName;
 private$email;
 private$password;
  public function __construct($name,$firstName,$email,$password){
  $this->name=$name;
  $this->firstName=$firstName;
  $this->email=$email;
  $this->password=$password;

}


//getters
public function getId(){ 
    return $this->id; }

public function getName(){ 
    return $this->name; }
public function getfirstName(){ 
    return $this->firstName; }
public function getEmail(){ 
    return $this->email; }

 public function getPassword(){ 
    return $this->password;}
//setters
public function setfirstName($firstName){
    $this->firstName=$firstName;
}
public function setName($name)
    {
        $this->name = $name;
    }
public function setPassword($password){ 
        $this->password=$password ;}
    
public function setEmail($email){ 
        $this->email = $email; }
}


