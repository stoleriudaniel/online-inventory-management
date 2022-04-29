<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <div class="sidetop">
            
        </div>
        <div class="sidenav">
            <a href="/">Dashboard</a>
            <a href="/categories">Categories</a>
            <a href="/brands">Brands</a>
            <a href="/products">Products</a>
            <a href="/orders">Orders</a>
            <a href="/reports">Reports</a>
            <a href="/settings">Settings</a>
        </div>
        <div class="main">
            <div class="card">
                <div class="card-container">
                    <h1>Manage Orders</h1>
                    <hr class="card-hr">
                    <a class="add-btn" href="#">Add</a>
                        <div>
                        <table>
                            <tr>
                                <th>Bill No</th>
                                <th>Customer Name</th>
                                <th>Customer Adress</th>
                                <th>Quantity</th>
                                <th>Total Amount</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>BLPR-E333</td>
                                <td>Alfreds Futterkiste</td>
                                <td>Germany, Frankfurt am Main, Am Ginnheimer, M432</td>
                                <td>8</td>
                                <td>320</td>
                                <td>
                                    <div class="options-update-delete">
                                        <button class="option-update">Update</button>
                                        <button class="option-delete">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
