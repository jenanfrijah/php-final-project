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
                        <a class="nav-link active" href="categories.php">
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
                <h1 class="h2">Manage Categories</h1>
                <a href="add_category.php" class="btn btn-primary">Add New Category</a> <!-- Link to add page -->
            </div>

            <!-- Categories Table -->
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Electronics</td>
                            <td>Devices and gadgets</td>
                            <td>
                                <a href="edit_category.php?id=1" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="delete_category.php?id=1" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Fashion</td>
                            <td>Clothing and accessories</td>
                            <td>
                                <a href="edit_category.php?id=2" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="delete_category.php?id=2" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Home & Garden</td>
                            <td>Home decor, tools, etc.</td>
                            <td>
                                <a href="edit_category.php?id=3" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="delete_category.php?id=3" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

<?php include '../includes/footer.php'; ?>