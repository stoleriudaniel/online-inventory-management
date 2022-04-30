<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <h1>Products</h1>
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
                            <th>Id</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Genre</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Nike Air</td>
                            <td>Nike</td>
                            <td>Sneakers</td>
                            <td>Black</td>
                            <td>39</td>
                            <td>Male</td>
                            <td>5</td>
                            <td>
                                <div class="options-update-delete">
                                    <button class="option-update">Update</button>
                                    <button class="option-delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nike Air</td>
                            <td>Nike</td>
                            <td>Sneakers</td>
                            <td>Black</td>
                            <td>37</td>
                            <td>Male</td>
                            <td>4</td>
                            <td>
                                <div class="options-update-delete">
                                    <button class="option-update">Update</button>
                                    <button class="option-delete">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Nike Air Force 1</td>
                            <td>Nike</td>
                            <td>Sneakers</td>
                            <td>Black</td>
                            <td>36</td>
                            <td>Female</td>
                            <td>5</td>
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
