<?php

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === "POST")
    {
        try {
            $title = $_POST['title'];
            $text = $_POST['text'];

            $sql = $conn->prepare('INSERT INTO notes (title, text) VALUES (?, ?)');
            $sql->bind_param("ss", $title, $text);

            $sql->execute();

        } catch (Exception $error) {
            die($error);
        }
    }

?>

<main>
    <h1>Create a note</h1>
    <form method="post" action="api/notes">
        <div>
            <label for="title">Note's title</label>
            <input id="title" name="title" type="text" required />
        </div>
        <div>
            <label for="text">Note's title</label>
            <textarea id="text" name="text" required ></textarea>
        </div>
        <button type="submit">Add note</button>
    </form>
</main>