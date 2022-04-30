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
                <h1>Categories</h1>
                    <hr class="card-hr">
                    <div class="row">
                        <div class="col-10">
                            <a class="add-btn option-add" href="#">Add</a>
                        </div>
                        <div class="col-90">
                            <input class="search-input" type="text" placeholder="">
                            <button class="option-search">Search</button>
                        </div>
                    </div>
                    <div>
                    <table>
                        <tr>
                            <th>Title</th>
                            <th>Added By</th>
                            <th>Added On</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>T-shirts</td>
                            <td>Maria Anders</td>
                            <td>27 February 2022</td>
                            <td>
                                <div class="options-update-delete">
                                    <button class="option-update">Update</button>
                                    <button class="option-delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sneakers</td>
                            <td>Francisco Chang</td>
                            <td>27 February 2022</td>
                            <td>
                                <div class="options-update-delete">
                                    <button class="option-update">Update</button>
                                    <button class="option-delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Dresses</td>
                            <td>Roland Mendel</td>
                            <td>25 February 2022</td>
                            <td>
                                <div class="options-update-delete">
                                    <button class="option-update">Update</button>
                                    <button class="option-delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sweatshirts</td>
                            <td>Helen Bennett</td>
                            <td>24 February 2022</td>
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
    </body>
</html>
