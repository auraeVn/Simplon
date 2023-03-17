
<form class="formConnexAjout" method="post" action="?controller=commande&action=commande_all_titres">


<div class="formDiv">

<select class="form-control selectRecherche" aria-label="Default select example" name="titre">
    <?php
    echo "<option selected>Recherche de commande par titre</option>";
    foreach ($commandesTitres as $f):
        echo '<option value="' . $f->Titre . '">' . $f->Titre . '</option>';
    endforeach;
    ?>
</select>

<div class="connexButtonDivRecherche">
    <button type="submit" class="btn btn-outline-light btnRecherche">Chercher</button>
</div>

</div>

</form>

