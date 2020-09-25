<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/journal.css">
    <link rel="shorcut icon" href="icons/success.png">
    <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
    <script src="scripts/js/del_list_js.js" defer></script>
    <script src="scripts/js/get_notices.js" defer></script>
    <script src="scripts/js/send_textForm.js" defer></script>
    <script src="scripts/js/show_form.js" defer></script>
    <script src="scripts/js/date.js" defer></script>
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
            <p id="hello">Choose one of these buttons to use journal.</p>
        </div>
    </div>

    <div class="date"><p id="date"></p></div>

</body>
</html>


