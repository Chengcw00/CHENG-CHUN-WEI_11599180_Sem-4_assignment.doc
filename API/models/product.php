<?php
  class Category {
    // DB Stuff
    private $conn;
    private $table = 'products';

    //New
      public $id;
      public $name;
      public $categoy;
      public $price;
      public $image_01;
      public $image_02;
      public $image_03;
      public $detail;


    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get categories
    public function read() {
      // Create query
      $query = 'SELECT
        id,
        name,
        category,
        price,
        image_01,
        image_02,
        image_03,
        detail
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