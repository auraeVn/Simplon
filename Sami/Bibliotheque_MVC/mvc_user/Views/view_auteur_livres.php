
<form class="formConnexAjout" method="post" action="?controller=livre&action=auteur_all_livres">

<!-- <div class="formDiv">
    <label class="labelForm" for="nom">Recherche de livres par nom d'Auteur.e</label><br>

</div> -->
<div class="formDiv">

<select class="form-control selectRecherche" aria-label="Default select example" name="auteur">
<?php  
 echo "<option selected>Recherche de livres par nom d'Auteur.e</option>";
   foreach ($auteurs as $l):
        echo '<option value="' . $l->Nom_Auteur . '">' . $l->Nom_Auteur . '</option>';
    endforeach;
    ?>
</select>

<div class="connexButtonDivRecherche">
<button type="submit" class="btn btn-outline-light btnRecherche">Chercher</button>
</div>

</div>
</form>

