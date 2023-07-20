<?php include 'navbar.php' ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <div class="card">
                <form method="POST" action="login_auth.php">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Mobile No</label>
                            <div class="col-md-6"><input id="mobile_no" type="number" class="form-control" name="mobile_no" required=""></div>
                        </div>
                        <div class="row mb-3"><label class="col-md-4 col-form-label text-md-end">Password</label>
                            <div class="col-md-6">
                                <div class="input-group"><input type="password" class="form-control" aria-label="password" id="password" name="password">
                                <span class="input-group-text"><i class="bi bi-eye-slash-fill" id="togglePassword"></i></span></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="remember" id="remember"><label class="form-check-label">Remember Me</label></div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4"><button type="submit" class="btn btn-primary">submit</button></div>
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
<?php include 'footer.php' ?>