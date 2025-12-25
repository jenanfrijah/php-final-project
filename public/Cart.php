<?php
include '../includes/header.php'; // Include header first

// No login check here yet - allow viewing cart
session_start(); // Ensure session is started

// Example: Assume $_SESSION['cart'] is structured as [product_id => quantity]
// $cart = $_SESSION['cart'] ?? [];

// Fetch product details based on items in $_SESSION['cart']
// This part requires interaction with your Product class/database
// $cartItems = [];
// if (!empty($cart)) {
//     $productIds = array_keys($cart);
//     // $cartItems = Product::getMultipleByIds($productIds); // Pseudo-code
//     // Then merge with quantities from $_SESSION['cart']
// }

$isLoggedIn = isset($_SESSION['user_id']);

// Simulated cart items for demonstration
$cartItems = [];
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $productId => $qty) {
        // Simulate fetching product details
        $cartItems[] = [
            'id' => $productId,
            'name' => "Product $productId",
            'price' => 10.00,
            'quantity' => $qty
        ];
    }
}

?>

<div class="container mt-4">
    <h2>Your Shopping Cart</h2>

    <?php if (empty($cartItems)): ?>
        <p>Your cart is empty.</p>
        <a href="index.php" class="btn btn-primary">Continue Shopping</a>
    <?php else: ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0; foreach ($cartItems as $item): ?>
                    <?php $itemTotal = $item['price'] * $item['quantity']; $total += $itemTotal; ?>
                    <tr>
                        <td><?= htmlspecialchars($item['name']) ?></td>
                        <td>$<?= number_format($item['price'], 2) ?></td>
                        <td><?= $item['quantity'] ?></td>
                        <td>$<?= number_format($itemTotal, 2) ?></td>
                        <td>
                            <a href="remove_from_cart.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-danger">Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <th colspan="3" class="text-end">Total:</th>
                    <td><strong>$<?= number_format($total, 2) ?></strong></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <?php if ($isLoggedIn): ?>
            <!-- Show Checkout button if logged in -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
            </div>
        <?php else: ?>
            <!-- Show Login prompt if not logged in -->
            <div class="alert alert-info mt-3">
                <p><strong>Almost there!</strong> Please <a href="login.php" class="alert-link">log in</a> or <a href="register.php" class="alert-link">create an account</a> to proceed with your purchase.</p>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="login.php" class="btn btn-primary">Log In to Checkout</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php include '../includes/footer.php'; ?>