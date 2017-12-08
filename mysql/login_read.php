<?php 
include "functions_sql.php";
include "db.php";
include "includes/header.php";
?>

<div class="container" style="background-color: #e2e2e2;">
    <div class="col-sm-6">
        <pre>
            <?php read_rows(); ?>
        </pre>
    </div>
</div>
<?php include "includes/header.php"; ?>