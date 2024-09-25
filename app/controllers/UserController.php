<?php

class UserController extends Controller{
    public function index() {
        $this->model('UserModel');

        // Create an instance of the model
        $userModel = new UserModel();

        // Fetch all users
        $users = $userModel->getAllUsers();

        // Load the view with the users data
        $this->view('users_view', ['users' => $users]);
    }

    public function show($id) {
        $this->model('UserModel');
        // Create an instance of the model
        $userModel = new UserModel();

        // Fetch a single user by ID
        $user = $userModel->getUserById($id);

        // For testing, simply print the result without loading a view
        // This is only for demonstration purposes
        echo '<pre>';
        print_r($user);
        echo '</pre>';
    }
}
