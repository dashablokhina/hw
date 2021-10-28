<?php
class avtoriz{
    public $hostname;
    public function __construct($hostname)
    {
        $this->hostname = $hostname;
    }
    public function authorization()
    {
        $hostname = 'localhost';
        $username = 'dasha';
        $password_db = '1112';
        $db_name = 'fact';
        $db_connect = mysqli_connect($hostname, $username, $password_db, $db_name);
        mysqli_set_charset($db_connect, 'utf8');
        $db_connect = mysqli_connect($hostname, $username, $password_db, $db_name);
        if ( !empty($_REQUEST['password']) and !empty($_REQUEST['login']) )
        {
            $login= trim($_REQUEST['login']);
            $password = trim($_REQUEST['password']);
            $query = 'SELECT * FROM `data` WHERE Login = "'.$login.'" AND `Password` = "'.$password.'" ';
            $result = mysqli_query($db_connect, $query);
            $user = mysqli_fetch_assoc($result);
            if(!empty($user))
            {
                header("Location: comment.php");
                exit();
            }
            else{
                echo "Неправильно введен логин или пароль";
                exit();
            }

        }
    }
}
?>