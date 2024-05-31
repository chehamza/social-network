<?php
class RegisterController extends Controller
{
    public function index()
    {try{
        if (isset($_POST['submit'])) {

           
            $newUser = new User($_POST['name'], $_POST['firstName'],$_POST['email'], $_POST['password']);
            $newUser::insertIntoDb($newUser);       
           }
        }catch (Exception $e){echo "Erreur lors de l'inscription : " . $e->getMessage();}
        require("../views/register.php");
    
    }
}
