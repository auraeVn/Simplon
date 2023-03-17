<form class="formConnexAjout" method="post" action="?controller=commande&action=commande_all_editeurs">
    <div class="formDiv">

        <select class="form-control selectRecherche" aria-label="Default select example" name="editeur">
            <?php
            echo "<option selected>Recherche de commande par Editeur</option>";
            foreach ($commandesEditeurs as $f) :
                echo '<option value="' . $f->Editeur . '">' . $f->Editeur . '</option>';
            endforeach;
            ?>
        </select>

        <div class="connexButtonDivRecherche">
            <button type="submit" class="btn btn-outline-light btnRecherche">Chercher</button>
        </div>

    </div>
</form>