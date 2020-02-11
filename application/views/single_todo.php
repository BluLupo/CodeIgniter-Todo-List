<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TO-DO-LIST</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">

</head>
<body>
<section>
    <!--Form-->
    <div>

        <form method="post" action="<?= site_url('app/upd_todo'); ?>">
            <input type="hidden" name="id" value="<?= $todo->id; ?>">
            <input type="text" name="todo" value="<?= $todo->text; ?>">
            <button type="submit">Update</button>

        </form>
    </div>
</section>

</body>
</html>