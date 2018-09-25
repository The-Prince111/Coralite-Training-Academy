 <?php

function call($controller, $action) 
{

    require_once('/App/Controllers/' . $controller . 'Controller.php');
     
    switch ($controller) 
    {
        case 'Index':
            $controller = new IndexController();
            break;
        case 'Login':
            $controller = new LoginController();
            require_once('Public/Login.php');
            break;
        case 'Register':
            $controller = new RegisterController();
            require_once('Public/Register.php');
            break;

        case 'Admin':
            $controller = new AdminController();
            require_once('App/Models/Admin.php');
            break;
        case 'Client':
            $controller = new ClientController();
            require_once('App/Models/Client.php');
            break;
        case 'Manager':
            $controller = new ManagerController();
            require_once('App/Models/Manager.php');
            break;
        default : //default page becomes ERROR 404 PAGE NOT FOUND
            $controller = new ErrorController();
            require_once('Public/Error.php');
            break;
    }

//session_start();
    $controller->{ $action }();
}

// we're adding an entry for the new controller and its actions
$controllers = array('Index' => array('home','about','contact'),'Register' => array('register'), 'Admin' => array('myProfile', 'addSubject', 'showAllSubjects'), 'Client' => array('myProfile', 'addSubject', 'showAllSubjects'), 'Login' => array('login'), 'Manager' => array('showClassList', 'showSubjects'));

if (array_key_exists($controller, $controllers)) 
{
    if (in_array($action, $controllers[$controller])) 
    {
        call($controller, $action);
    } 
    else 
        {
        call('Index', 'index');
        }
} 
else 
    {
    call('Error', 'error');
    }
?>