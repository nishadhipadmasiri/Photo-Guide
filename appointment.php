<?php 
include 'navbar.php';
if ($_SESSION['login'] === false) {
    header("location:login.php");
}
$branch_id = $_GET['branch_id'] ?? '';
$branch_name = $_GET['branch_name'] ?? '';

?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <br>
            <div class="card">
                <div class="card-header">Make Appointment</div>
                <form method="POST" action="reserve.php">
                    <div class="card-body">
                        <h5>Select Service</h5>
                        <input type="hidden" name="branch_id" value="<?php echo $branch_id ?>">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">User Name</label>
                            <div class="col-md-6"><input id="user_name" type="text" class="form-control" name="user_name" placeholder="John" value="<?php echo $_SESSION['user_name'] ?>" required=""></div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Branch Name</label>
                            <div class="col-md-6"><input id="user_name" type="text" class="form-control" name="branch_name" placeholder="John"  value="<?php echo $branch_name ?>" required=""></div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Photo Size</label>
                            <div class="col-md-6">
                                <select name="size" id="size" class="form-control">
                                    <option value="2.5x3.5">Wallet Size (2.5 x 3.5 inches)</option>
                                    <option value="3.5x5">3R Size (3.5 x 5 inches)</option>
                                    <option value="4x6">4R Size (4 x 6 inches)</option>
                                    <option value="5x7">5R Size (5 x 7 inches)</option>
                                    <option value="6x8">6R Size (6 x 8 inches)</option>
                                    <option value="8x10">8R Size (8 x 10 inches)</option>
                                    <option value="8.5x11">8.5 x 11 inches</option>
                                    <option value="11x14">11 x 14 inches</option>
                                    <option value="11x17">11 x 17 inches</option>
                                    <option value="16x20">16 x 20 inches</option>
                                    <option value="18x24">18 x 24 inches</option>
                                    <option value="20x24">20 x 24 inches</option>
                                    <option value="20x30">20 x 30 inches</option>
                                    <option value="24x30">24 x 30 inches</option>
                                    <option value="24x36">24 x 36 inches</option>
                                    <option value="A4">A4 Size (8.27 x 11.69 inches)</option>
                                    <option value="A3">A3 Size (11.69 x 16.54 inches)</option>
                                    <option value="A2">A2 Size (16.54 x 23.39 inches)</option>
                                    <option value="A1">A1 Size (23.39 x 33.11 inches)</option>
                                    <option value="A0">A0 Size (33.11 x 46.81 inches)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Quantity</label>
                            <div class="col-md-6">
                                <input id="contact" type="number" class="form-control" name="qty" placeholder="" required="">
                            </div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Laminate</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="laminate" id="yes" value="yes">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="laminate" id="no" value="no">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>
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