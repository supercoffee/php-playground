<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Playground</title>
</head>
<body>
<h1>My Notes</h1>

<h3>Add note</h3>
<form method="post">
    <div>
        <label for="contents">Note</label>
        <textarea id="contents" name="contents" rows="5"></textarea>
    </div>
    <button type="submit">Add note</button>
</form>

<?php
    $NOTE_FILE = '/app-data/notes.json';
    if (!file_exists($NOTE_FILE)) {
        file_put_contents($NOTE_FILE, '[]');
    }
    $noteFile = file_get_contents($NOTE_FILE);
    $allNotes = json_decode($noteFile, true);
    $newNote = $_POST['contents'] ?? null;
    if ($newNote) {
        $allNotes[]['contents'] = $newNote;
        $newFileContents = json_encode($allNotes, JSON_PRETTY_PRINT);
        file_put_contents($NOTE_FILE, $newFileContents);
    }
    
    foreach ($allNotes as $note) {
        echo "<p>{$note['contents']}</p>";
    }
?>
</body>
</html>