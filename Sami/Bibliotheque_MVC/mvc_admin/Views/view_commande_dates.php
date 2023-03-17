
<form class="formConnexAjout" method="post" action="?controller=commande&action=commande_all_dates">

<div class="formDiv">

<select class="form-control selectRecherche" aria-label="Default select example" name="date">
    <?php
    echo "<option selected>Recherche de commande par Date</option>";
    foreach ($commandesDates as $f):
        echo '<option value="' . $f->date_achat . '">' . $f->date_achat . '</option>';
    endforeach;
    ?>
</select>

<div class="connexButtonDivRecherche">
    <button type="submit" class="btn btn-outline-light btnRecherche">Chercher</button>
</div>

</div>

</form>





