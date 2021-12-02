<?php
session_start();
?>
    <!DOCTYPE html>
    <link rel="stylesheet" href="../stylefolder/stylesheet.css">
    <div id="page-container">
        <div id="content-wrap">
            <form action="addFileHandler.php" method="post" class="handle-background">
                <h3>Add new character.</h3>
                Enter Character Name: <input type="text" name="inputName"><br>
                Enter Character Race: <input type="text" name="inputRace"><br>
                Enter Character Class: <input type="text" name="inputClass"><br>
                Enter Character Level: <input type="text" name="inputLevel"><br>
                <input type="submit" value="Submit" class="form-submit-button">
            </form><br>
            <form action="editFileHandler.php" method="post" class="handle-background">
                <h3>Edit character.</h3>
                Which character would you like to edit: <input type="text" name="editName"><br>
                What category would you like to edit? <select name="editChoice">
                    <option value="CharacterName">Name</option>
                    <option value="CharacterRace">Race</option>
                    <option value="CharacterClass">Class</option>
                    <option value="CharacterLevel">Level</option>
                </select>
                What would you like to change it to? <input type="text" name="newEditChoice"><br>
                <input type="submit" value="Submit" class="form-submit-button">
            </form><br>
            <form action="deleteFileHandler.php" method="post" class="handle-background">
                <h3>Delete character.</h3>
                Enter Character Name: <input type="text" name="deleteName"><br>
                <input type="submit" value="Submit" class="form-submit-button">
            </form>
            <a href="../content.php">Return to content.</a>
        </div>
    </div>
