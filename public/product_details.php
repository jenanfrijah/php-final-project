showing the product details plus adding the product to the cart if pressed on the add cart button 
<?php
// Simulate fetching product (replace with Product::getById($_GET['id']))
$product = ['id' => 1, 'name' => 'Wireless Headphones', 'price' => 79.99, 'description' => 'High-quality noise-cancelling headphones.', 'image' => 'product1.jpg'];
include '../includes/header.php';
?>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <img src="assets/images/<?= htmlspecialchars($product['image']) ?>" class="img-fluid" alt="<?= htmlspecialchars($product['name']) ?>">
    </div>
    <div class="col-md-6">
      <h2><?= htmlspecialchars($product['name']) ?></h2>
      <p class="text-success fs-4 fw-bold">$<?= number_format($product['price'], 2) ?></p>
      <p><?= htmlspecialchars($product['description']) ?></p>
      <form action="cart.php" method="POST">
        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
        <button type="submit" class="btn btn-success">Add to Cart</button>
      </form>
    </div>
  </div>
</div>

<?php include '../includes/footer.php'; ?>