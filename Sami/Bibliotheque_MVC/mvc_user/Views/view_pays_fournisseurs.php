<br>

<form class="formConnexAjout" method="post" action="?controller=fournisseur&action=pays_all_fournisseurs">


<div class="formDiv">

<select class="form-control selectRecherche" aria-label="Default select example" name="pays">
    <?php
    echo "<option selected>Recherche de fournisseur par pays</option>";
    foreach ($pays as $p):
        echo '<option value="' . $p->pays . '">' . $p->pays . '</option>';
    endforeach;
    ?>
</select>

<div class="connexButtonDivRecherche">
    <button type="submit" class="btn btn-outline-light btnRecherche">Chercher</button>
</div>

</div>
</form>

