<?php
require "../../../Private/Back-End/backendcon.php";
?>

<section class="shopContainer" id="shopContainer">
            <h2 class="section-title">Shop Products</h2>

            <div class="shop-content">
                <div class="product-box">
                    <?php 
                    $sql = "SELECT product, price FROM products";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table><tr><th>product</th><th>price</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["product"] . "</td><td>" . $row["price"]. "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    ?>
                    <?php ?>
                </div>
            </div>
        </section>