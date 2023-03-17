<br>

<form class="formConnexAjout" method="post" action="?controller=livre&action=editeur_all_livres">

<div class="formDiv">

<select class="form-control selectRecherche" aria-label="Default select example" name="editeur">
<?php  
 echo "<option selected>Recherche de livre par Editeur</option>";
 foreach ($editeurs as $e):
    echo '<option value="' . $e->Editeur . '">' . $e->Editeur . '</option>';
endforeach;
    ?>
</select>

<div class="connexButtonDivRecherche">
<button type="submit" class="btn btn-outline-light btnRecherche">Chercher</button>
</div>

</div>

</form>

