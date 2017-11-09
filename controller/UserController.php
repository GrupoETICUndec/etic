<?php
require_once 'model/User.php';

class UserController
{
    public function index()
    {
        require_once 'view/header.php';
        require_once 'view/index.php';
        require_once 'view/footer.php';
    }

    public function login()
    {
        require_once 'view/header.php';
        require_once 'view/user/login.php';
        require_once 'view/footer.php';
    }

    public function validateSession()
    {
        
        $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
        $passwd = $_POST['passwd'];
        $res = User::get($user, $passwd);
        if (count($res) == 1) {
            $_SESSION['id'] = $res->getId();
            $_SESSION['name'] = $res->getName();
            $_SESSION['user'] = $res->getUser();
        }
        header('Location: index.php?c=user&a=index');
    }

    public function closeSession()
    {
        $_SESSION = array();
        session_destroy();
        header('Location: index.php?c=user&a=index');
    }
    
}
