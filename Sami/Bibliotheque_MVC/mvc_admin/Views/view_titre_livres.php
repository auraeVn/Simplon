<br>

<form class="formConnexAjout" method="post" action="?controller=livre&action=titre_all_livres">


<div class="formDiv">

<select class="form-control selectRecherche" aria-label="Default select example" name="titre">
<?php  
 echo "<option selected>Recherche de livre par Titre</option>";
 foreach ($titres as $t):
    echo '<option value="' . $t->Titre . '">' . $t->Titre . '</option>';
endforeach;
    ?>
</select>

<div class="connexButtonDivRecherche">
<button type="submit" class="btn btn-outline-light btnRecherche">Chercher</button>
</div>

</div>

</form>

