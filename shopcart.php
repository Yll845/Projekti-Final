<?php
      session_start();
      if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        echo "<p>Shporta juaj eshte bosh.</p>";
      } else {
        echo "<ul>";
        foreach ($_SESSION['cart'] as $item) {
          echo "<li>" . $item['name'] . " - " . $item['price'] . " <a href='remove_from_cart.php?id=" . $item['id'] . "'>Hiq</a></li>";
        }
        echo "</ul>";
        echo "<a href='checkout.php'>Paguaj</a>";
      }
      ?>