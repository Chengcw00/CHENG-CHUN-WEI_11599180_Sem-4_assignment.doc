<?php
  class Category {
    // DB Stuff
    private $conn;
    private $table = 'messages';

    //New
      public $id;
      public $user_id;
      public $name;
      public $email;
      public $number;
      public $message;


    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get categories
    public function read() {
      // Create query
      $query = 'SELECT
        id,
        user_id,
        name,
        email,
        number,
        message
      FROM
        ' . $this->table . '
      ORDER BY
        name DESC';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    }