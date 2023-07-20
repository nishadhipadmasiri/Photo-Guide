<?php 
include 'navbar.php';
if (!isset($_SESSION['login']) || $_SESSION['login'] === false) {
    header("location:login.php");
}
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <br>
            <div class="card">
                <div class="card-header">Branches</div>
                <div class="card-body">
                    <div class="row">
                    <?php
                    $sql = "SELECT * FROM branches ORDER BY id ASC";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="card col-md-2 col-lg-3">
                                <img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['name'] ?></h5>
                                    <p class="<?php echo ($row['available'] == 1) ? 'text-success' : 'text-danger'?>">
                                        <?php echo ($row['available'] == 1) ? 'Available' : 'Not Available'?>
                                    </p>
                                    <p class="card-text"><?php echo $row['description'] ?></p>
                                    <?php
                                        if ($row['available'] == 1) {
                                            ?>
                                            <a href="appointment.php?branch_id=<?php echo $row['id'] ?>&branch_name=<?php echo $row['name'] ?>" class="btn btn-primary">Make Appointment</a>
                                        <?php } else { ?>
                                            <button onclick="alert('Branch is not available')" class="btn btn-primary">Make Appointment</button>
                                       <?php }
                                    ?>

                                </div>
                            </div>


                            <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>