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
                        <a class="nav-link active" href="products.php">
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
                <h1 class="h2">Manage Products</h1>
                <a href="add_product.php" class="btn btn-primary">Add New Product</a> <!-- Link to add page -->
            </div>

            <!-- Product Search & Filter (Optional) -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Search products...">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>All Categories</option>
                        <option>Electronics</option>
                        <option>Fashion</option>
                        <option>Home</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-outline-secondary w-100">Filter</button>
                </div>
            </div>

            <!-- Products Table -->
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101</td>
                            <td>Wireless Headphones</td>
                            <td>Electronics</td>
                            <td>$79.99</td>
                            <td>50</td>
                            <td><img src="../assets/images/product1.jpg" alt="Product" width="50" height="50"></td>
                            <td>
                                <a href="edit_product.php?id=101" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="delete_product.php?id=101" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Smart Watch</td>
                            <td>Electronics</td>
                            <td>$129.99</td>
                            <td>25</td>
                            <td><img src="../assets/images/product2.jpg" alt="Product" width="50" height="50"></td>
                            <td>
                                <a href="edit_product.php?id=102" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="delete_product.php?id=102" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>USB-C Charging Cable</td>
                            <td>Accessories</td>
                            <td>$12.50</td>
                            <td>100</td>
                            <td><img src="../assets/images/product3.jpg" alt="Product" width="50" height="50"></td>
                            <td>
                                <a href="edit_product.php?id=103" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="delete_product.php?id=103" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination (Optional Placeholder) -->
            <nav aria-label="Product pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>

        </main>
    </div>
</div>

<?php include '../includes/footer.php'; ?>