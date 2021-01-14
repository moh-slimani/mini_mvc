<main class="form-signin">
    <form method="post">
        <h1 class="h3 mb-3 fw-normal">Create your new account</h1>
        <label for="inputName" class="visually-hidden">Name</label>
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required autofocus>
        <label for="inputEmail" class="visually-hidden">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required
               autofocus>
        <label for="inputPassword" class="visually-hidden">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <input type="submit" name="submit" value="Sign up" class="w-100 btn btn-lg btn-primary">
    </form>
    <a href="<?php echo URL ?>users/login">got to login</a>
</main>



