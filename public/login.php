<?php
// Optional: Start session if not already started by header.php
// session_start(); // Usually already in header.php
include '../includes/header.php';

// Optional: Check if already logged in
if (isset($_SESSION['user_id'])) {
    // Redirect to home or profile if already logged in
    header('Location: index.php');
    exit;
}

// Optional: Get any error message passed via session
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
// Clear the message after displaying
unset($_SESSION['error_message']);

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0"><i class="fas fa-sign-in-alt"></i> Login</h3>
                    <p class="mb-0">Sign in to your account</p>
                </div>
                <div class="card-body">
                    <?php if (!empty($error_message)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= htmlspecialchars($error_message) ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <form action="process_login.php" method="POST"> <!-- Replace with your actual login processing script -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p>Don't have an account? <a href="register.php">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>