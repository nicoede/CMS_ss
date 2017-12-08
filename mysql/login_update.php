<?php 
include "db.php"; 
include "functions_sql.php";
include "includes/header.php";
update_table();
?>

<div class="container">
    <div class="col-sm-6">
       <h1 class="text-center">Update</h1>
        <form action="login_update.php" method="post">
            <div class="form-group">
              <br>
               <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
               <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form">
                <select name="id" id="">
                   <?php
                    show_all_data();
                    ?>
                </select>
            </div><br>
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
        </form>
    </div>
</div>
<?php include "includes/footer.php"; ?>