<?php

include '../app/vendor/autoload.php';
$dataProvider = new App\Acme\Foo();

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NFQ project quality meter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<h1>NFQ project quality meter</h1>
<br>
<h1>Groups</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Importance</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($dataProvider->getItems() as $nr => $doc) { ?>
        <tr>
            <th scope="row"><?= $doc['id'] ?></th>
            <td><?= $doc['name'] ?></td>
            <td><?= $doc['importance'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
