<?php

include '../includes/header.php';
?>

<div class="container-fluid mt-4">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">
                            <i class="fas fa-box"></i> Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">
                            <i class="fas fa-tags"></i> Categories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users.php">
                            <i class="fas fa-users"></i> Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">
                            <i class="fas fa-shopping-cart"></i> Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="reviews.php">
                            <i class="fas fa-comments"></i> Reviews
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Manage Reviews</h1>
            </div>

            <!-- Reviews Table -->
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>User</th>
                            <th>Rating</th>
                            <th>Comment</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>501</td>
                            <td>Wireless Headphones</td>
                            <td>John Doe</td>
                            <td><span class="text-warning">★★★★☆</span> (4)</td>
                            <td>Great sound quality!</td>
                            <td>2025-12-23</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            <td>
                                <a href="edit_review.php?id=501" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="delete_review.php?id=501" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>502</td>
                            <td>Smart Watch</td>
                            <td>Jane Smith</td>
                            <td><span class="text-warning">★★★★★</span> (5)</td>
                            <td>Perfect for tracking workouts.</td>
                            <td>2025-12-22</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            <td>
                                <a href="edit_review.php?id=502" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="delete_review.php?id=502" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>503</td>
                            <td>USB-C Charging Cable</td>
                            <td>Bob Johnson</td>
                            <td><span class="text-warning">★★☆☆☆</span> (2)</td>
                            <td>Stopped working after a week.</td>
                            <td>2025-12-20</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>
                                <a href="approve_review.php?id=503" class="btn btn-sm btn-outline-success">Approve</a>
                                <a href="delete_review.php?id=503" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Reject</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

<?php include '../includes/footer.php'; ?>