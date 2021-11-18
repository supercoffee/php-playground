<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Playground</title>
</head>
<body>

<h1>
<?php
    $name = $_POST['name'] ?? null;
    if ($name) {
        echo "Hi $name";
    } else {
        echo 'Welcome to PHP Playground!';
    }
?>
</h1>
    
<form method="post">
    <div>
        <label for="name">Your Name</label>
        <input name="name" id="name">
    </div>
    <button type="submit">Submit</button>
</form>
</body>
</html>