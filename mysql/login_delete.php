<?php 
include "db.php"; 
include "functions_sql.php";
include "includes/header.php";
delete_rows();
?>

<div class="container">
    <div class="col-sm-6">
       <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">
            <div class="form">
                <select name="id" id="">
                   <?php
                    show_all_data();
                    ?>
                </select>
            </div><br>
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>
    </div>
</div>
<?php include "includes/footer.php"; ?>