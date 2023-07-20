<?php 
include 'navbar.php';
if ($_SESSION['login'] === false) {
    header("location:login.php");
}
$prices = [
        '2.5x3.5' => '50',
        '3.5x5' => '50',
        '4x6' => '50',
        '5x7' => '100',
        '6x8' => '100',
        '8x10' => '100',
        '8.5x11' => '100',
        '11x14' => '150',
        '11x17' => '150',
        '16x20' => '180',
        '18x24' => '180',
        '20x24' => '200',
        '20x30' => '250',
        '24x30' => '250',
        '24x36' => '250',
        'A4' => '180',
        'A3' => '220',
        'A2' => '400',
        'A1' => '800',
        'A0' => '1000',
];
if (isset($_POST['submit'])) {
    $branch_id = $_POST['branch_id'] ?? '';
    $user_id = $_POST['user_id'] ?? '';
    $user_name = $_POST['user_name'] ?? '';
    $branch_name = $_POST['branch_name'] ?? '';
    $size = $_POST['size'] ?? '';
    $qty = $_POST['qty'] ?? '';
    $laminate = $_POST['laminate'] ?? '';

    $tot = $prices[$size] * $qty;
    if ($laminate == 'yes'){
        $tot = $tot * 1.10;
    }
    $advance = $tot * 0.5;
}


?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <br>
            <div class="card">
                <div class="card-header">Make Appointment</div>
                <form method="POST" action="reserve_functions.php">
                    <div class="card-body">
                        <h5>Confirm Reservation</h5>
                        <input type="hidden" name="branch_id" value="<?php echo $branch_id ?>">
                        <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">User Name</label>
                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control" name="user_name" placeholder="John" value="<?php echo $user_name ?>" readonly="">
                            </div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Branch Name</label>
                            <div class="col-md-6"><input id="branch_name" type="text" class="form-control" name="branch_name" placeholder="John"  value="<?php echo $branch_name ?>" readonly=""></div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Photo Size</label>
                            <div class="col-md-6"><input id="size" type="text" class="form-control" name="size" placeholder="John"  value="<?php echo $size ?>" readonly=""></div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Quantity</label>
                            <div class="col-md-6">
                                <input id="qty" type="number" class="form-control" name="qty" value="<?php echo $qty ?>" readonly="">
                            </div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Laminate</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="laminate" id="yes" value="yes" <?php echo $laminate == 'yes' ? 'checked' : ''?> disabled>
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="laminate" id="no" value="no" <?php echo $laminate == 'no' ? 'checked' : ''?> disabled>
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Service Charges</h5>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Total Payment</label>
                            <div class="col-md-6">
                                <input id="size" type="number" class="form-control" name="tot" value="<?php echo $tot ?>" readonly="">
                            </div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Advance Payment</label>
                            <div class="col-md-6">
                                <input id="qty" type="number" class="form-control" name="advance" value="<?php echo $advance ?>" readonly="">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4"><button type="submit" name="submit" class="btn btn-primary">Reserve</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    //ajax request
    // $(document).ready(function() {
    //     $('#request_form').on('submit', function(e) {
    //         e.preventDefault();
    //         $.ajax({
    //             type: "POST",
    //             url: "request_fuel.php",
    //             data: $(this).serialize(),
    //             success: function(response) {
    //                 console.log(response);
    //                 if (response == "Request sent successfully") {
    //                     alert(response);
    //                     window.location.reload();
    //                 } else {
    //                     alert(response);
    //                 }
    //             }
    //         });
    //     });
    // });
</script>
<?php include 'footer.php' ?>