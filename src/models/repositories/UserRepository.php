<?php

abstract class userRepository extends Db{
    public static function request($request){
        // Connect to the database and execute the query
        $result = self::getInstance()->query($request);
        // Disconnect from the database
        self::disconnect();
        // Return the result of the query
        return $result;
    }

    public static function getUsers(){
        return self::request("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getUserById($id){
        return self::request("SELECT * FROM users WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
    }

    public static function getUserByEmail($email){
        return self::request("SELECT * FROM users WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);
    }

    public static function insertIntoDb(User $user){
     

        return self::request("INSERT INTO users(name, firstName, email, password) VALUES('" . $user->getName() . "' ,
        '" . $user->getfirstName() . "', 
        '" . $user->getEmail() . "',
        '" . $user->getPassword() . "')");
    }

}
   
