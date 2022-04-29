<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <div class="sidetop">
            
        </div>
        <div class="sidenav">
            <div>
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
                <div class="card-container" style="margin-left:25px;">
                    <h1>Add Product</h1>
                    <hr class="card-hr" style="margin-bottom:40px;">
                    <div class="row">
                        <div class="col-25">
                            <label class="add-label" for="fname">Product ID:</label>
                        </div>
                        <div class="col-75">
                            <input class="add-input" type="text"><br><br>
                        </div>
                        <div class="col-25">
                            <label class="add-label" for="fname">Product Name:</label>
                        </div>
                        <div class="col-75">
                            <input class="add-input" type="text"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label class="add-label" for="fname">Product Brand:</label>
                        </div>
                        <div class="col-75">
                            <input class="add-input" type="text"><br><br>
                        </div>
                        <div class="col-25">
                            <label class="add-label" for="fname">Product Category:</label>
                        </div>
                        <div class="col-75">
                            <input class="add-input" type="text"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label class="add-label" for="fname">Product Color:</label>
                        </div>
                        <div class="col-75">
                            <input class="add-input" type="text"><br><br>
                        </div>
                        <div class="col-25">
                            <label class="add-label" for="fname">Product Size:</label>
                        </div>
                        <div class="col-75">
                            <input class="add-input" type="text"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label class="add-label" for="fname">Product Genre:</label>
                        </div>
                        <div class="col-75">
                            <input class="add-input" type="text"><br><br>
                        </div>
                        <div class="col-25">
                            <label class="add-label" for="fname">Product Quantity:</label>
                        </div>
                        <div class="col-75">
                            <input class="add-input" type="text"><br><br>
                        </div>
                    </div>
                    <a class="add-btn" href="#">Add</a>
                </div>
            </div>
        </div>
    </body>
</html>
