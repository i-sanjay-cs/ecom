<style>


* {
  padding: 0;
  margin: 0;
  position: relative;
  box-sizing: border-box;
}

.listing-section, .cart-section {
  width: 100%;
  float: left;
  padding: 1%;
  border-bottom: 0.01em solid #dddbdb;
}

.product {
  float: left;
  width: 23%;
  border-radius: 2%;
  margin: 1%;
}

.product:hover {
  box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
  -webkit-box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
  -moz-box-shadow:    1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
}

.image-box {
  width: 100%;
  overflow: hidden;
  border-radius: 2% 2% 0 0;
}

.images {
  height: 15em;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  border-radius: 2% 2% 0 0;
  transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -webkit-transition: all 1s ease;
  -o-transition: all 1s ease;
}

.images:hover {
  transform: scale(1.2);
  overflow: hidden;
  border-radius: 2%;
}



.text-box {
  width: 100%;
  float: left;
  border: 0.01em solid #dddbdb;
  border-radius: 0 0 2% 2%;
  padding: 1em;
}

h2, h3 {
  float: left;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 1em;
  text-transform: uppercase;
  margin: 0.2em auto;
}

.item, .price {
  clear: left;
  width: 100%;
  text-align: center;
}

.price {
  color: Grey;
}

.description, label, button, input {
  float: left;
  clear: left;
  width: 100%;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  font-size: 1em;
  text-align: center;
  margin: 0.2em auto;
}

input:focus {
  outline-color: #fdf;
}

label {
  width: 60%;
}

.text-box input {
  width: 15%;
  clear: none;
}

.text-box button {
  margin-top: 1em;
}

button {
  padding: 2%;
  background-color: #dfd;
  border: none;
  border-radius: 2%;
}

button:hover {
  bottom: 0.1em;
}

button:focus {
  outline: 0;
}

button:active {
  bottom: 0;
  background-color: #fdf;
}

.table-heading, .table-content {
  width: 75%;
  margin: 1% 12.25%;
  float: left;
  background-color: #dfd;
}

.table-heading h2 {
  padding: 1%;
  margin: 0;
  text-align: center;
}

.cart-product {
  width: 50%;
  float: left;
}

.cart-price {
  width: 15%;
  float: left;
}

.cart-quantity {
  width: 10%;
  float: left;
}

.cart-total {
  width: 25%;
  float: left;
}

.cart-image-box {
  width: 20%;
  overflow: hidden;
  border-radius: 2%;
  float: left;
  margin: 1%;
}

.cart-images {
  height: 7em;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}

.cart-item {
  width: 20%;
  float: left;
  margin: 3.2em 1%;
  text-align: center;
}
.cart-description {
  width: 53%;
  float: left;
  margin: 3.2em 1%;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  font-size: 1em;
  text-align: center;
}

.cart-price h3, .cart-total h3 {
  margin: 3.2em 5% 3.2em 20%;
  width: 60%;
}

.cart-quantity input {
  margin: 3.2em 1%;
  border: none;
}

.remove {
  width: 10%;
  margin: 1px;
  float: right;
  clear: right;
}

.coupon {
  width: 20%;
  background-color: #dfd;
  margin: 1% 1% 1% 12.25%;
  float: left;
  height: 6em;
}

.coupon input {
  width: 60%;
  border: none;
  margin: 12.75% 5%;
  padding: 1%;
}

.coupon button {
  width: 25%;
  float: left;
  clear: right;
  margin: 12% 5% 12% 0;
}

.keep-shopping {
  width: 15%;
  height: 6em;
  float: left;
  margin: 1% auto;
  padding: 1%;
  background-color: #dfd;
}

.keep-shopping button {
  text-transform: uppercase;
  margin: 12% auto;

}

.checkout {
  width: 37.25%;
  margin: 1% 12.75% 1% 1%;
  float: right;
  background-color: #dfd;
  height: 6em;
}

.checkout button {
  width: 30%;
  clear: none;
  margin: 5.4% 0 5.4% 5.5%;
  text-transform: uppercase;
}

.final-cart-total {
  width: 15%;
  float: right;
  margin: 7%;
  background-color: White;
}

.final-cart-total h3 {
  color: Black;
}
header{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 70px;
  background-color: #fff;
  padding: 0 20px;
  width: 100%;
  box-shadow: 0px 5px 5px #888888;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
}
.logo{
  font-size: 2em;
  font-weight: bold;
  color: #573b8a;
  text-decoration: none;
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

</style
<header>
<div class="content-header">
  <div class="content-heading">
    <h1 class="logo">E-Commerce</h1>
  </div>
  <div class="content-image">
  <a href="products">
  <img class="image-wrapper" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAAB9CAMAAAC4XpwXAAAAZlBMVEX///8AAADk5OT5+fnz8/Ojo6Pn5+fg4ODLy8utra2wsLCBgYHt7e2bm5vOzs61tbU1NTWTk5M7OztfX192dnZDQ0PW1tZNTU2/v7+Li4tkZGRZWVlqamoeHh5vb28qKioREREYGBjwapreAAADlklEQVRoge2Z2dKiMBCFPYRNVkE2RcT//V9ykjQgOg4pZxIupvJdSASLE5LO6Q4eDhaLxWKxWCwWi8VisVj+U4IuCh1quk2eN+6O2tkZgpvQ906ieUrZXuIFl6uKG//M3ZorXy4lUPr7iFfARRxZDKTXRybaDdffRT7ijzw1j0CUUNM9Y9hB3Ae8ud1dMM7xlpQ0Imap0M9NF2mLYv4WAo5pcQcI5naKK5dcLl0Rm1Yvno/OBnSHFtH8vcGYGFZvl5DjamC8N9VyDcjMijvDc+A93Ljx4LT4zA2pWfVmta5iEXGJGICJdDUORghxWtp3HPnkA4vHRzgbE064qSJCXWCNBxxfTqA3EnqtuHX+ri7sDm/yBsQd/IS+3/Egc9bweeef/PyTn0B9t29pULqv8y6Z5j1YP7yBdReiZmKVvd2bD3vID85jpR7qV+/QHoShoF6fdUfIQE+k+oP6kH++w78QyWjicf+yplkP6e7uj1Snmsf7fId/QTrbwani1xLKr2Ix79zzBRf5aSDZKIxsmFc/YMJz4mcm/8QodWnp11s//DuuwleV6nIIRv3q9XYon8j5pCEO+qvrYdtEapr3qwx9/dXtqqL6RC/Vi1gemr3Vr7TiaMl1usWZYrdwl7J3z4zZuRg28zYN+Tk0Y3YBTpv7VBryvqEJ0K0eot1cR6mUbR15uOpW79BvqtOEl74ZszvKJLN1XbpcQJ6nW11VLedS9dG0RtQLRd6cCruGVp7uFymKFHcIp5KOYl/3Zva+neJm9S41UtmdFQaWkXp0NGF2rFY8z6Se0hho3k2ycTvJHMjkEFNhvx0j36urXkkFVNhdmTxo3su6qlXkjJPLUbbRq77epn/EJ/WR1E96a6tAVawlVNgNU4GnVz1TZQ63nNTPBsyuU+3KGZWVj4TKDL115RF3xS8ovSCgVKt3E61KMot6lhswu1hZLU3qnQmzq5T3o4IeOZme3m3sTZHi5oIeaWLA7FQpTvRP4lE3tNaVrFWm7Gqa72MS8EnYLoC/hHuJ6jWYXOdewoOvjy7y/ZY2+LPHYRM4ifvHZxIlVdpRphuV7vAd09vQsW5v97jwusxxGXvpCS+pKvI58TvNhV3ejnhjKHvek/TYNT6T/RumC3fte1gJ85sw8or43peP975MJx6xgXeFv3eEuUHWeWlc3fp6HpYyznb7S3LpiJv4ThPu/G+sxWKxWCwWi8VisVgslp34BWYZIxfAx8GQAAAAAElFTkSuQmCC" alt="products" />
  </a>
  <a href="add_to_cart.php">
  <img class="image-wrapper" src="https://static.vecteezy.com/system/resources/thumbnails/009/157/893/small/shopping-cart-set-of-shopping-cart-icon-on-white-background-shopping-cart-icon-shopping-cart-design-shopping-cart-icon-sign-shopping-cart-icon-isolated-shopping-cart-symbol-free-vector.jpg" alt="cart" />
  </a>
  </div>
</div>
</header>


<br><br><br><br>
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

// Fetching products from the database
$sql = "SELECT * FROM products WHERE hidden = 1";
$result = mysqli_query($conn, $sql);

?>

<div class="listing-section">
  <?php
  // Displaying products from the database
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <div class="product">
    <div class="image-box">
      <div class="images" id="image-1">
        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" style="width: 400px; height: auto;">
      </div>
    </div>

      <div class="text-box">
        <h2 class="item"><?php echo $row['name']; ?></h2>
        <h3 class="price">$<?php echo $row['price']; ?></h3>
        <p class="description"><?php echo $row['description']; ?></p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
          <label for="quantity">Quantity:</label>
          <input type="number" name="quantity" id="quantity" value="1" min="1">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
      </div>
    </div>
  <?php
  }
  ?>
</div>
