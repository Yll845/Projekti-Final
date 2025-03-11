<?php
      
      $conn = new mysqli("localhost", "root", "", "katana_db");

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT * FROM products";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<div class='product-card'>";
          echo "<img src='Images/" . $row['image'] . "' alt='" . $row['name'] . "'>";
          echo "<h3>" . $row['name'] . "</h3>";
          echo "<p>" . $row['price'] . "</p>";
          echo "<form method='post' action='cart.php'>";
          echo "<input type='hidden' name='product_id' value='" . $row['id'] . "'>";
          echo "<button type='submit'>Shto ne Shporte</button>";
          echo "</form>";
          echo "</div>";
        }
      } else {
        echo "<p>No products available.</p>";
      }

      $conn->close();
      ?>