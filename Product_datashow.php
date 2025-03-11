<?php

      $result = $conn->query("SELECT * FROM products");

      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . htmlspecialchars($row['title']) . "</td>";
              echo "<td>" . htmlspecialchars($row['description']) . "</td>";
              echo "<td>" . $row['quantity'] . "</td>";
              echo "<td>$" . $row['price'] . "</td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='5'>No products found.</td></tr>";
      }
      ?>
	 