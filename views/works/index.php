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
        <li style="border: 1px solid white; margin-bottom: 2px;" class="<?= $work->status == 3 ? 'checked' : '' ?>">
            <?= $work->work_name ?> <br>

            <?php if ($work->status == 1) {?>
                <span style="color: black">Planing</span>
            <?php } ?>

            <?php if ($work->status == 2) {?>
                <span style="color: red">Doing</span>
            <?php } ?>

            <?php if ($work->status == 3) {?>
                <span style="color: greenyellow">Complete</span>
            <?php } ?>

            <div class="text-right action">
                <a href="index.php?controller=works&action=showEdit&id=<?= $work->id ?>">
                    <button class="btn btn-primary">Edit</button>
                </a>
                <a href="index.php?controller=works&action=delete&id=<?= $work->id ?>"
                   onclick="return confirm('Are you sure you want to delete this item?');">
                    <button class="btn btn-danger">Remove</button>
                </a>
            </div>
        </li>

    <?php } ?>
</ul>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>