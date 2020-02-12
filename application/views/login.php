<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TO-DO-LIST</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="http://localhost/login.css">

</head>
<body>
<section>
    <!-- Form -->
    <div>
        <form method="post" action="<?php echo site_url('welcome/login'); ?>">
            <label for="email">Email *</label>
            <input type="email" name="email">

            <label for="password">Password *</label>
            <input type="password" name="password">
            <button type="submit">Login</button>
        </form>

        <?php if (function_exists('validation_errors')) { echo validation_errors(); } ?>
    </div>
</section>

</body>
</html>