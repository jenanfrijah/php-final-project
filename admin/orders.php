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
                        <a class="nav-link active" href="orders.php">
                            <i class="fas fa-shopping-cart"></i> Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reviews.php">
                            <i class="fas fa-comments"></i> Reviews
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Manage Orders</h1>
            </div>

            <!-- Order Search & Filter (Optional) -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Search orders...">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>All Statuses</option>
                        <option>Pending</option>
                        <option>Approved</option>
                        <option>Shipped</option>
                        <option>Delivered</option>
                        <option>Cancelled</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>All Users</option>
                        <option>User 1</option>
                        <option>User 2</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-outline-secondary w-100">Filter</button>
                </div>
            </div>

            <!-- Orders Table -->
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1001</td>
                            <td>John Doe</td>
                            <td>$129.99</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>2025-12-24</td>
                            <td>
                                <a href="view_order.php?id=1001" class="btn btn-sm btn-outline-info">View</a>
                                <a href="update_order_status.php?id=1001&status=approved" class="btn btn-sm btn-outline-success">Approve</a>
                                <a href="update_order_status.php?id=1001&status=shipped" class="btn btn-sm btn-outline-primary">Ship</a>
                            </td>
                        </tr>
                        <tr>
                            <td>#1002</td>
                            <td>Jane Smith</td>
                            <td>$249.97</td>
                            <td><span class="badge bg-success">Delivered</span></td>
                            <td>2025-12-22</td>
                            <td>
                                <a href="view_order.php?id=1002" class="btn btn-sm btn-outline-info">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>#1003</td>
                            <td>Bob Johnson</td>
                            <td>$85.49</td>
                            <td><span class="badge bg-danger">Cancelled</span></td>
                            <td>2025-12-20</td>
                            <td>
                                <a href="view_order.php?id=1003" class="btn btn-sm btn-outline-info">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

<?php include '../includes/footer.php'; ?>