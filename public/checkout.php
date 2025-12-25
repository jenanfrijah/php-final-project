<?php
// ---

include '../includes/header.php';

// --- Simulated Data Placeholders ---
// Replace these with real data fetched from database using $_SESSION['user_id'] in a full implementation
$userId = $_SESSION['user_id'];
$userName = $_SESSION['name'] ?? 'John Doe'; // Use session name or placeholder
$userEmail = $_SESSION['email'] ?? 'johndoe@example.com'; // Use session email or placeholder

// Simulate cart items (replace this with fetching from $_SESSION['cart'] and database in full implementation)
$cartItems = [
    [
        'id' => 101,
        'name' => 'Wireless Headphones',
        'price' => 79.99,
        'quantity' => 1,
        'subtotal' => 79.99,
        'image' => 'product_headphones.jpg' // Placeholder image name
    ],
    [
        'id' => 102,
        'name' => 'Smart Watch',
        'price' => 129.99,
        'quantity' => 1,
        'subtotal' => 129.99,
        'image' => 'product_watch.jpg' // Placeholder image name
    ],
    [
        'id' => 103,
        'name' => 'USB-C Charging Cable',
        'price' => 12.50,
        'quantity' => 2,
        'subtotal' => 25.00,
        'image' => 'product_cable.jpg' // Placeholder image name
    ],
];

$cartTotal = array_sum(array_column($cartItems, 'subtotal'));
$shippingCost = 5.00; // Example flat rate
$totalAmount = $cartTotal + $shippingCost;
// --- End Simulated Data ---

?>

<div class="container mt-4">
    <h2>Checkout</h2>

    <div class="row">
        <!-- Order Summary (Left Column) -->
        <div class="col-lg-7">
            <h4>Order Summary</h4>
            <?php if (empty($cartItems)): ?>
                <p>Your cart is empty. <a href="index.php">Continue Shopping</a></p>
            <?php else: ?>
                <table class="table table-borderless">
                    <tbody>
                        <?php foreach ($cartItems as $item): ?>
                            <tr>
                                <td style="width: 10%;">
                                    <!-- Optional: Product Image Placeholder -->
                                    <img src="assets/images/<?= htmlspecialchars($item['image']) ?>" class="img-thumbnail" alt="<?= htmlspecialchars($item['name']) ?>" style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6><?= htmlspecialchars($item['name']) ?></h6>
                                    <small class="text-muted">Qty: <?= $item['quantity'] ?></small>
                                </td>
                                <td class="text-end">
                                    $<?= number_format($item['subtotal'], 2) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="border-top pt-2">
                    <div class="d-flex justify-content-between">
                        <strong>Subtotal:</strong>
                        <span>$<?= number_format($cartTotal, 2) ?></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <strong>Shipping:</strong>
                        <span>$<?= number_format($shippingCost, 2) ?></span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total:</h5>
                        <h5 class="text-success">$<?= number_format($totalAmount, 2) ?></h5>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Payment & Shipping Info (Right Column) -->
        <div class="col-lg-5">
            <h4>Payment & Shipping Information</h4>
            <form action="process_order.php" method="POST"> <!-- Replace with your actual order processing script -->

                <!-- User Info (Prefill if available) -->
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" name="full_name" value="<?= htmlspecialchars($userName) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($userEmail) ?>" required readonly> <!-- Often readonly after login -->
                </div>

                <!-- Shipping Address -->
                <h5>Shipping Address</h5>
                <div class="mb-3">
                    <label for="address" class="form-label">Street Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" name="state" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="zip" class="form-label">ZIP Code</label>
                        <input type="text" class="form-control" id="zip" name="zip_code" required>
                    </div>
                </div>

                <!-- Payment Method -->
                <h5>Payment Method</h5>
                <div class="mb-3">
                    <label for="paymentMethod" class="form-label">Select Payment Method</label>
                    <select class="form-select" id="paymentMethod" name="payment_method" required>
                        <option value="">Choose...</option>
                        <option value="credit_card">Credit Card</option>
                        <option value="debit_card">Debit Card</option>
                        <option value="paypal">PayPal</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <!-- Place Order Button -->
                <button type="submit" class="btn btn-success w-100 mt-3">Place Order ($<?= number_format($totalAmount, 2) ?>)</button>
            </form>
            <a href="cart.php" class="btn btn-secondary w-100 mt-2">Back to Cart</a>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>