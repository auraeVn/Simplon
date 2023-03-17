<br>

<form class="formConnexAjout" method="post" action="?controller=fournisseur&action=localite_all_fournisseurs">

    <div class="formDiv">

        <select class="form-control selectRecherche" aria-label="Default select example" name="localite">
            <?php
            echo "<option selected>Recherche de fournisseur par localité</option>";
            foreach ($localites as $l) :
                echo '<option value="' . $l->localite . '">' . $l->localite . '</option>';
            endforeach;
            ?>
        </select>

        <div class="connexButtonDivRecherche">
            <button type="submit" class="btn btn-outline-light btnRecherche">Chercher</button>
        </div>

    </div>

</form>