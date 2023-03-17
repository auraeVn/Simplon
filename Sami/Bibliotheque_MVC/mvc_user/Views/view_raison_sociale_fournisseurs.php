<br>

<form class="formConnexAjout" method="post" action="?controller=fournisseur&action=raison_sociale_all_fournisseurs">

    <div class="formDiv">

        <select class="form-control selectRecherche" aria-label="Default select example" name="fournisseur">
            <?php
            echo "<option selected>Recherche de fournisseur par raison sociale</option>";
            foreach ($fournisseurs as $f) :
                echo '<option value="' . $f->raison_sociale . '">' . $f->raison_sociale . '</option>';
            endforeach;
            ?>
        </select>

        <div class="connexButtonDivRecherche">
            <button type="submit" class="btn btn-outline-light btnRecherche">Chercher</button>
        </div>

    </div>

</form>