<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel and DB Connection</title>
</head>
<body>
<div>
    <?php

    if (DB::connection()->getPdo()) {
        echo "Successfully Connected to DB and DB name is :" . DB::connection()->getDatabase
    }
    ?>
</div>
</body>
</html>
