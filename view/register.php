<?php

    include 'header.php';

?>
<h3 class="titreForm">Formulaire d'inscription</h3>
    <form method="post"  class="row formInscription" action="../controller/registerController.php">
        <div class="col-md-6">
            <label for="formEmail" class="form-label">Email</label>
            <input type="email" class="form-control" name="formEmail" required>
        </div>
        <div class="col-md-6">
            <label for="formPassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="formPassword" required>
        </div>
        <div class="col-md-6">
            <label for="formFirstName" class="form-label">First name</label>
            <input type="text" class="form-control" name="formFirstName" required>
        </div>
        <div class="col-md-6">
            <label for="formLastName" class="form-label">Last name</label>
            <input type="text" class="form-control" name="formLastName" required>
        </div>
        <div class="col-12 submit">
            <button class="btn btnSubmit" type="submit">Valider</button>
        </div>
    </form>

