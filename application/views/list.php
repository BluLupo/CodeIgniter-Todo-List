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

    <link rel="stylesheet" type="text/css" href="https://antares.hersel.it/todo.css">

</head>
<body>
<section>
    <!--Form-->
<div>

<form method="post" action="<?= site_url('app/new_todo'); ?>">
<input type="text" name="todo">
    <button type="submit">Save</button>

</form>
<?php if(function_exists('validation_errors'))  {echo validation_errors();} ?>

</div>
    <!--List-->
    <div>
    <ul>
        <?php
            foreach ($todos as $todo)
            {
        ?>
                <li class="
                    <?php
                        if($todo->completed)
                        {
                            echo 'done';
                        }
                    ?>"
                >
                    <!--Check-->
                    <div>
                        <a href="<?php if ($todo->completed)
                        {echo site_url("app/uncheck/$todo->id");}
                        else
                            echo site_url("app/check/$todo->id"); ?>"></a>
                        <?php if($todo->completed) { ?>
                            <i class="fa fa-check"></i>
                        <?php }?>

                    </div>
                    <!-- Tod-o -->
                    <div>
                        <p><?= $todo->text; ?></p>
                    </div>

                    <!-- Buttons -->
                    <div>
                        <!-- Modify -->
                        <a href="<?= site_url("app/todo/$todo->id"); ?>">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <!-- Delete -->
                        <a href="<?= site_url("app/destroy_todo/$todo->id"); ?>">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>

                </li>
        <?php } ?>


    </ul>

    </div>



</section>

</body>
</html>
