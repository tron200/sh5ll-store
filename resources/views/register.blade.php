<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="/css/auth.css">
</head>
<body>
    
<form method="post" action="javascript: void(0);" id="register-form" class="register-form" autocomplete="off" role="main">
    <h1 class="a11y-hidden">Register Form</h1>
    <div>
        <label class="label-name">
            <input type="text" class="text" name="name" placeholder="Name" tabindex="1" required />
            <span class="required">Name</span>
        </label>
    </div>
    <div>
        <label class="label-email">
            <input type="email" class="text" name="email" placeholder="Email" tabindex="2" required />
            <span class="required">Email</span>
        </label>
    </div>
    <input type="checkbox" name="show-password" class="show-password a11y-hidden" id="show-password" tabindex="3" />
    <label class="label-show-password" for="show-password">
        <span>Show Password</span>
    </label>
    <div>
        <label class="label-password">
            <input type="text" class="text" name="password" placeholder="Password" tabindex="3" required />
            <span class="required">Password</span>
        </label>
    </div>
    <input type="submit" value="Log In" />

    <div class="email">
        <br>
        <a href="#">Already have an account? Sign in here</a>
    </div>
    <figure aria-hidden="true">
        <div class="person-body"></div>
        <div class="neck skin"></div>
        <div class="head skin">
            <div class="eyes"></div>
            <div class="mouth"></div>
        </div>
        <div class="hair"></div>
        <div class="ears"></div>
        <div class="shirt-1"></div>
        <div class="shirt-2"></div>
    </figure>
</form>
</body>
</html>
