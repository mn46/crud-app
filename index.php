<?php
include 'db.php';

$query = "SELECT title, text from notes";
$sqlResult = $conn->query($query);

?>

<main>
    <h1>Your notes</h1>

    <?php foreach ($sqlResult->fetch_all() as $note): ?>

        <h2><?php echo htmlspecialchars($note[0]); ?></h2>
        <p><?php echo htmlspecialchars($note[1]); ?></p>

    <?php endforeach; ?>

    <a href='create-note'>Create a note</a>
</main>