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
                <div class="card-container">
                    <h1>Add product</h1>
                    <label for="fname">Product ID:</label>
                    <input type="text"><br><br>
                    <label for="fname">Product Name:</label>
                    <input type="text"><br><br>
                    <label for="fname">Product Brand:</label>
                    <input type="text"><br><br>
                    <label for="fname">Product Category:</label>
                    <input type="text"><br><br>
                    <label for="fname">Product Color:</label>
                    <input type="text"><br><br>
                    <label for="fname">Product Size:</label>
                    <input type="text"><br><br>
                    <label for="fname">Product Genre:</label>
                    <input type="text"><br><br>
                    <label for="fname">Product Quantity:</label>
                    <input type="text"><br><br>
                    <label for="fname">Product Details:</label>
                    <textarea rows="5" cols="50"></textarea><br><br>
                    <button>Add</button>
                </div>
            </div>
        </div>
    </body>
</html>
