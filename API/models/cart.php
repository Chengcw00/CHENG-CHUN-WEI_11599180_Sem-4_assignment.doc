<?php
  class Category {
    // DB Stuff
    private $conn;
    private $table = 'cart';

    //New
      public $id;
      public $user_id;
      public $pid;
      public $name;
      public $price;
      public $quantity;
      public $image;


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
        pid,
        name,
        price,
        quantity,
        image
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