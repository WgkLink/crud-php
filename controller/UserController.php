<?php
class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        include 'view/users.php';
    }

    public function save() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];

            $this->userModel->createUser($name, $email);
        }

        header('Location: index.php');
    }

    public function edit() {
        $id = $_GET['id'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];

            $this->userModel->updateUser($id, $name, $email);
            header('Location: index.php');
        } else {
            $user = $this->userModel->getUserById($id);
            include 'view/edit-user.php';
        }
    }

    public function delete() {
        $id = $_GET['id'];
        $this->userModel->deleteUser($id);
        header('Location: index.php');
    }
}
