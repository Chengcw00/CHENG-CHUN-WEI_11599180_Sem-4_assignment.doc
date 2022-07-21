<?php
  class Category {
    // DB Stuff
    private $conn;
    private $table = 'orders';

    //New
      public $id;
      public $user_id;
      public $name;
      public $number;
      public $email;
      public $method;
      public $address;
      public $total_products;
      public $total_price;
      public $placed_on;
      public $payment_status;


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
        number,
        email,
        method,
        address,
        total_products,
        total_price,
        placed_on,
        payment_status
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