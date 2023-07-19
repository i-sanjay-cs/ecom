<style>
.card-horizontal {
    display: flex;
    flex: 1 1 auto;
}
.product-image {
    width: 200px;
    height: 200px;
}
header{
  background-color: #fff;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
}
.logo{
  font-size: 2em;
  font-weight: bold;
  color: #573b8a;
  text-decoration: none;
}

.row{
  display: grid;
    grid-template-columns: 25% 25% 25% 25%;
    align-items: center;
  }

  .content-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0px 20px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
  }

  .image-wrapper {
    width: 100px;
    height: 100px;
  }

</style>
<header>
  <div class="content-header">
    <div class="content-heading">
      <h1 class="logo">E-Commerce</h1>
    </div>
    <div class="content-image">
      <a href="products.php">
      <img class="image-wrapper" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAAB9CAMAAAC4XpwXAAAAZlBMVEX///8AAADk5OT5+fnz8/Ojo6Pn5+fg4ODLy8utra2wsLCBgYHt7e2bm5vOzs61tbU1NTWTk5M7OztfX192dnZDQ0PW1tZNTU2/v7+Li4tkZGRZWVlqamoeHh5vb28qKioREREYGBjwapreAAADlklEQVRoge2Z2dKiMBCFPYRNVkE2RcT//V9ykjQgOg4pZxIupvJdSASLE5LO6Q4eDhaLxWKxWCwWi8VisVj+U4IuCh1quk2eN+6O2tkZgpvQ906ieUrZXuIFl6uKG//M3ZorXy4lUPr7iFfARRxZDKTXRybaDdffRT7ijzw1j0CUUNM9Y9hB3Ae8ud1dMM7xlpQ0Imap0M9NF2mLYv4WAo5pcQcI5naKK5dcLl0Rm1Yvno/OBnSHFtH8vcGYGFZvl5DjamC8N9VyDcjMijvDc+A93Ljx4LT4zA2pWfVmta5iEXGJGICJdDUORghxWtp3HPnkA4vHRzgbE064qSJCXWCNBxxfTqA3EnqtuHX+ri7sDm/yBsQd/IS+3/Egc9bweeef/PyTn0B9t29pULqv8y6Z5j1YP7yBdReiZmKVvd2bD3vID85jpR7qV+/QHoShoF6fdUfIQE+k+oP6kH++w78QyWjicf+yplkP6e7uj1Snmsf7fId/QTrbwani1xLKr2Ix79zzBRf5aSDZKIxsmFc/YMJz4mcm/8QodWnp11s//DuuwleV6nIIRv3q9XYon8j5pCEO+qvrYdtEapr3qwx9/dXtqqL6RC/Vi1gemr3Vr7TiaMl1usWZYrdwl7J3z4zZuRg28zYN+Tk0Y3YBTpv7VBryvqEJ0K0eot1cR6mUbR15uOpW79BvqtOEl74ZszvKJLN1XbpcQJ6nW11VLedS9dG0RtQLRd6cCruGVp7uFymKFHcIp5KOYl/3Zva+neJm9S41UtmdFQaWkXp0NGF2rFY8z6Se0hho3k2ycTvJHMjkEFNhvx0j36urXkkFVNhdmTxo3su6qlXkjJPLUbbRq77epn/EJ/WR1E96a6tAVawlVNgNU4GnVz1TZQ63nNTPBsyuU+3KGZWVj4TKDL115RF3xS8ovSCgVKt3E61KMot6lhswu1hZLU3qnQmzq5T3o4IeOZme3m3sTZHi5oIeaWLA7FQpTvRP4lE3tNaVrFWm7Gqa72MS8EnYLoC/hHuJ6jWYXOdewoOvjy7y/ZY2+LPHYRM4ifvHZxIlVdpRphuV7vAd09vQsW5v97jwusxxGXvpCS+pKvI58TvNhV3ejnhjKHvek/TYNT6T/RumC3fte1gJ85sw8or43peP975MJx6xgXeFv3eEuUHWeWlc3fp6HpYyznb7S3LpiJv4ThPu/G+sxWKxWCwWi8VisVgslp34BWYZIxfAx8GQAAAAAElFTkSuQmCC" alt="products" />
      </a>
      <a href="add_to_cart.php">
      <img class="image-wrapper" src="https://static.vecteezy.com/system/resources/thumbnails/009/157/893/small/shopping-cart-set-of-shopping-cart-icon-on-white-background-shopping-cart-icon-shopping-cart-design-shopping-cart-icon-sign-shopping-cart-icon-isolated-shopping-cart-symbol-free-vector.jpg" alt="cart" />
      </a>
    </div>
  </div>
</header>


<br><br><br><br><br><br><br><br>
<?php
// Connect to database
$servername = "sql307.byetcluster.com";
$username = "epiz_34110193";
$password = "ljR08LHCWVYZa";
$dbname = "epiz_34110193_ecommerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the product ID and quantity are set
if (!isset($_POST['product_id']) || !isset($_POST['quantity'])) {
    die("Product ID and quantity are required.");
}

// Get the product ID and quantity
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

// Fetch the product from the database
$sql = "SELECT * FROM products WHERE id = '$product_id'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error fetching product: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) == 0) {
    die("Product not found.");
}

$row = mysqli_fetch_assoc($result);

// Check if the product is already in the cart
$sql = "SELECT * FROM cart WHERE product_id = '$product_id'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error checking cart: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    // Update the quantity in the cart
    $row = mysqli_fetch_assoc($result);
    $quantity += $row['quantity'];
    $sql = "UPDATE cart SET quantity = '$quantity' WHERE product_id = '$product_id'";
} else {
    // Add the product to the cart
    $sql = "INSERT INTO cart (product_id, quantity) VALUES ('$product_id', '$quantity')";
}

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error adding product to cart: " . mysqli_error($conn);
}

// Retrieve all products in the cart
$sql = "SELECT cart.quantity, products.id, products.name, products.price, products.image FROM cart INNER JOIN products ON cart.product_id = products.id";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error fetching cart: " . mysqli_error($conn));
}

// Display the cart as horizontal cards
if (mysqli_num_rows($result) > 0) {
    echo "<div class='container'>";
    echo "<div class='row'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='col-md-4 mb-4'>";
        echo "<div class='card'>";
        echo "<img class='card-img-top product-image' src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . $row['name'] . "</h5>";
        echo "<p class='card-text'>" . $row['price'] . "</p>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='product_id' value='" . $row['id'] . "'>";
        echo "<input type='hidden' name='action' value='update'>";
        echo "<input type='text' name='new_quantity' value='" . $row['quantity'] . "' size='2'>";
        echo "<input type='submit' value='Update'>";
        echo "</form>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='product_id' value='" . $row['id'] . "'>";
        echo "<input type='hidden' name='action' value='remove'>";
        echo "<input type='submit' value='Remove'>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";
} else {
    echo "Your cart is empty.";
}
