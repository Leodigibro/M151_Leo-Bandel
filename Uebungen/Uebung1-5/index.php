<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        echo "Hallo {$username}!";
    }
?>

<form method="POST" action="?">
    <input type="text" name="name" placeholder="Benutzername" required />
    <select name="class" id="class">
        <option value="S-INF19s">S-INF19s</option>
        <option value="S-INF20s">S-INF20s</option>
        <option value="S-INF21s">S-INF21s</option>
    </select>
    <input type="submit" value="Absenden"/>
</form>