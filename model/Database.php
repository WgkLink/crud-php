<?php
class Database {
    private $db;

    public function __construct() {
        $this->db = new SQLite3('database.sqlite');
        $this->db->exec('CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, email TEXT)');
    }

    public function executeQuery($query) {
        return $this->db->query($query);
    }

    public function getConnection() {
        return $this->db;
    }
}
