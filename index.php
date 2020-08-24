<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include_once 'css/css.php'; ?>
    <link rel="shorcut icon" href="icons/success.png">
    <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1>Journal</h1>
    </div>

    <div class="journal">
        <div class="button">
            <button id="addNotice" onclick="showForm();" name="add">Add new notice</button>
            <button id="showNotices" onclick="showNotice();" name="show">Show notices</button>
            <button id="DeleteNotices" onclick="listForDel();" name="delete">Delete notices</button>
        </div>
        <div class="content" id="content">
            <p id="text">Click on one of these buttons.</p>
        </div>
    </div>

    
    <div class="date"><p id="date"></p></div>

    <?php include_once "scripts/show_form.php";?>
    <?php include_once "scripts/get_notices.php"; ?>
    <?php include_once "scripts/date.php"; ?>
    <?php include_once "scripts/send_textForm.php"; ?>
    <?php include_once "scripts/del_list_js.php"?>

</body>
</html>


