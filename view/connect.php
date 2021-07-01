<?php
include 'header.php';

?>

<h3 class="titreForm">Formulaire de connection</h3>
<div class="formulaireConnection">
    <form method="post"  class="row formConnect" action="../controller/connectController.php">
        <div class="col-md-6">
            <label for="connectEmail" class="form-label">Email</label>
            <input type="email" class="form-control inputConnect" name="connectEmail" required>
        </div>
        <div class="col-md-6">
            <label for="connectPassword" class="form-label">Password</label>
            <input type="password" class="form-control inputConnect" name="connectPassword" required>
        </div>
        <div class="col-12 submit">
            <button class="btn btnSubmit" type="submit" name="submit">Se connecter</button>
        </div>
    </form>
</div>