<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="/css/login-styles.css">
    </head>
    <body>
        <div class="center">
            <div class="login-container">
                <div class="login-header">
                    <h2>Admin</h2>
                </div>
                <form method="" action="">
                    <div class="row">
                        <div class="login-label">
                            <label for="username">Username:</label>
                        </div>
                        <div class="login-input">
                            <input type="text" name="username" id="username">
                        </div>
                    </div>
                    <div class="row">
                        <div class="login-label">
                            <label for="password">Password:</label>
                        </div>
                        <div class="login-input">
                            <input type="text" name="password" id="password">
                        </div>
                    </div>
                    <div>
                        <input class="option-login" type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>