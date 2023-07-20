<?php include "navbar.php" ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <div class="card">
                <form method="POST" action="register_functions.php">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">User Name</label>
                            <div class="col-md-6"><input id="user_name" type="user_name" class="form-control" name="user_name" placeholder="John" required=""></div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Email</label>
                            <div class="col-md-6"><input id="email" type="email" class="form-control" name="email" placeholder="john@gmail.com" required=""></div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Phone No</label>
                            <div class="col-md-6"><input id="contact" type="number" class="form-control" name="contact" placeholder="0777144476" required=""></div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Password</label>
                            <div class="col-md-6">
                                <div class="input-group"><input type="password" class="form-control" aria-label="password" id="password" name="password">
                                <span class="input-group-text"><i class="bi bi-eye-slash-fill" id="togglePassword"></i></span></div>
                            </div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Confirm Password</label>
                            <div class="col-md-6">
                                <div class="input-group"><input type="password" class="form-control" aria-label="password" id="pc_assword" name="c_password">
                                <span class="input-group-text"><i class="bi bi-eye-slash-fill" id="togglePassword"></i></span></div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4"><button type="submit" name="submit" class="btn btn-primary">submit</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#togglePassword").click(function() {
            $(this).toggleClass("bi-eye-fill bi-eye-slash-fill");
            var input = $("#password");
            input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
        });
    });
</script>
<?php include "footer.php" ?>