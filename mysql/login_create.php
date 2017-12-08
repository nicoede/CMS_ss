<?php 
include "db.php";
include "functions_sql.php";
include "includes/header.php";
create_rows();
?>


    <div class="container">
        <div class="col-sm-6">
           <h1 class="text-center">Create</h1>
            <form action="login_create.php" method="post">
                <div class="form-group"><br>
                   <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                   <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
            </form>
        </div>
 
<?php include "includes/footer.php"; ?>