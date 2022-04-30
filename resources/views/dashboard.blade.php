<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <div class="sidetop">
            <div class="title">
            <h1>Meyer's Inventory System</h1>
            </div>
            <span class="admin-logged">
                <h1>Welcome, Roland Mendel (Logout)</h1>
            </span>
        </div>
        <div class="sidenav">
            <div class="sidenav-container">
                <a href="/">Dashboard</a>
                <a href="/categories">Categories</a>
                <a href="/brands">Brands</a>
                <a href="/products">Products</a>
                <a href="/orders">Orders</a>
                <a href="/reports">Reports</a>
                <a href="/settings">Settings</a>
            </div>
        </div>
        <div class="main">
            <div class="card">
                <div class="card-container">
                    <h1>Dashboard</h1>
                    <hr class="card-hr">
                    <div class="row">
                        <div class="dashboard-card categories-dashboard-card col-30">
                            <div class="dashboard-card-number">
                                <p>4</p>
                            </div>
                            <div class="dashboard-card-title">
                                <p>Categories</p>
                            </div>
                            <hr class="bottom-dashboard-card-bar">
                            <div class="bottom-dashboard-card-link">
                                <p>View categories</p>
                            </div>
                        </div>
                        <div class="col-70"></div>
                        <div class="dashboard-card brands-dashboard-card col-30">
                            <div class="dashboard-card-number">
                                <p>5</p>
                            </div>
                            <div class="dashboard-card-title">
                                <p>Brands</p>
                            </div>
                            <hr class="bottom-dashboard-card-bar">
                            <div class="bottom-dashboard-card-link">
                                <p>View brands</p>
                            </div>
                        </div>
                        <div class="col-70"></div>
                        <div class="dashboard-card products-dashboard-card col-30">
                            <div class="dashboard-card-number">
                                <p>3</p>
                            </div>
                            <div class="dashboard-card-title">
                                <p>Products</p>
                            </div>
                            <hr class="bottom-dashboard-card-bar">
                            <div class="bottom-dashboard-card-link">
                                <p>View products</p>
                            </div>
                        </div>
                        <div class="col-70"></div>
                        <div class="dashboard-card orders-dashboard-card col-30">
                            <div class="dashboard-card-number">
                                <p>1</p>
                            </div>
                            <div class="dashboard-card-title">
                                <p>Orders</p>
                            </div>
                            <hr class="bottom-dashboard-card-bar">
                            <div class="bottom-dashboard-card-link">
                                <p>View orders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
