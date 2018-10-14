<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ESR TodoList!</title>
</head>
<body>

<div id="myDIV" class="header">
    <h2 style="margin:5px">My To Do List</h2>
    <a href="index.php?controller=works&action=showCreate">
        <button type="button" class="addBtn">Add</button>
    </a>
</div>

<ul id="myUL">
    <?php foreach ($works as $work) { ?>
        <li><?= $work->work_name ?></li>
    <?php } ?>
</ul>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>