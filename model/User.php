<?php
class User {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getAllUsers() {
        $query = 'SELECT * FROM users';
        return $this->db->query($query);
    }

    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = $id";
        return $this->db->querySingle($query, true);
    }

    public function createUser($name, $email) {
        $query = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        $this->db->exec($query);
    }

    public function updateUser($id, $name, $email) {
        $query = "UPDATE users SET name='$name', email='$email' WHERE id = $id";
        $this->db->exec($query);
    }

    public function deleteUser($id) {
        $query = "DELETE FROM users WHERE id = $id";
        $this->db->exec($query);
    }
}
