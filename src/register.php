<?php require_once '../vendor/autoload.php'; ?>

<html>
    <?php require_once './header.php'; ?>
        <div class="index-body">
            <div class="box float-right">
                <h2>Register</h2>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <br>
                    Already have an account ? <a href="./login.php">Login</a>
                    <button type="submit" class="btn btn-primary float-right">Register</button>
                </form>
            </div>
        </div>
    </body>
</html>
