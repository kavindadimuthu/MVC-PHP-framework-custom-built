<?php

class UserModel {
    private $db;

    public function __construct() {
        // Database connection
        $this->db = Database::getInstance()->getPdo();
    }

    // Fetch all users
    public function getAllUsers() {
        $query = "SELECT * FROM userdetails";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fetch user by ID
    public function getUserById($id) {
        $query = "SELECT * FROM userdetails WHERE userID = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}