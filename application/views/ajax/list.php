<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

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
            <a href="<?php
            if ($todo->completed)
            {echo site_url("app/uncheck/$todo->id");}
            else
                echo site_url("app/check/$todo->id");
            ?>">

            </a>
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
            <a href="<?=
            site_url("app/destroy_todo/$todo->id");
            ?>"
               class="delete-todo">
                <i class="fa fa-times"></i>
            </a>
        </div>

    </li>
<?php } ?>




