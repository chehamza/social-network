
<?php
session_start();

class LoginController extends Controller {
    public function index() {
        if(isset($_POST["submit"])) {
            // Vérifier si les champs email et password ne sont pas vides
            if(!empty($_POST['email']) && !empty($_POST['password'])) {
                $user = UserRepository::getUserByEmail($_POST["email"]);
                if(htmlspecialchars($_POST['password'])=== $user['password']) {
                    var_dump($user['password']);
                    $_SESSION['user'] = $user;
                    $this->redirect("/");
                } else {
                    echo "Invalid email or password";
                }
            } else {
                echo "Please enter both email and password";
            }
        }
  
        require("../views/login.php");
    }
   
}