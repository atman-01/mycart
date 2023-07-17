<?php

namespace Backend;

class Database {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect() {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (!$this->connection) {
            die("Database connection error: " . mysqli_connect_error());
        }
    }

    public function disconnect() {
        mysqli_close($this->connection);
    }

    public function query($sql) {
        return mysqli_query($this->connection, $sql);
    }

    // Additional methods for executing queries, fetching results, etc.
}
