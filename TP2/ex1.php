<?php
    include 'function.php';
    getHeader(true, "Exercice 1");
?>
    <div class="container">
        <form method='POST' action="ex1Validation.php">
            <fieldset>
                <legend>Connexion :</legend>
                <label>Nom :</label>
                <input type="text" name="user" class="" />
                <input type='button' value="Valider" class="btn"/>
            </fieldset>
        </form>

<?php
    getFooter(true);
?>