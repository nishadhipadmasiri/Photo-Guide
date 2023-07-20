<?php include 'navbar.php' ?>
<script>
    //if cookie is set, redirect to home.php
    //alert the cookie value
    if (document.cookie.indexOf("user_id") >= 0) {
        window.location.replace("dashboard.php");
    } else {
        window.location.replace("login.php");
    }
</script>
<?php include 'footer.php' ?>