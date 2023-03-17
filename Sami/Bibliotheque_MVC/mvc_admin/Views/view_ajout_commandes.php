<form class="formConnex" method="post" action="?controller=commande&action=ajout_all_commandes">

   <div class="formDivCommandes">
      <select class="form-control selectRecherche" aria-label="Default select example" name="titre">
         <?php
         echo "<option selected>Titre</option>";
         foreach ($ajout_commandes_titres as $l) :
            echo '<option value="' . $l->Id . '">' . $l->Titre . '</option>';
         endforeach;
         ?>
      </select>
   </div>

   <div class="formDivCommandes">
   <select class="form-control selectRecherche" aria-label="Default select example" name="rsf">
      <?php
     echo "<option selected>Raison sociale fournisseur</option>";
      foreach ($ajout_commandes_raison_sociale as $l) :
         echo '<option value="' . $l->Id_fournisseurs . '">' . $l->raison_sociale . '</option>';
      endforeach;
      echo '</select>';
      ?>
   </div>

   <div class="input-group flex-nowrap selectRecherche">
      <input type="date" class="form-control" placeholder="Date" name="date" required>
   </div>

   <div class="input-group flex-nowrap selectRecherche">
      <input type="number" class="form-control" placeholder="Prix" name="prix" min="1" max="1000" required>
   </div>


   <div class="formDivCommandes">
<select class="form-control selectRecherche" aria-label="Default select example" type="number" name="nbrExemplaires" required>
<?php  
 echo "<option selected>Nombre d'exemplaires</option>";
 echo '<option value="1">1</option>';
 echo '<option value="2">2</option>';
 echo '<option value="3">3</option>';
 echo '<option value="4">4</option>';
 echo '<option value="5">5</option>';
 echo '<option value="10">10</option>';
 echo '<option value="100">100</option>';
 echo '</select>';
    ?>
</select>
</div>

<div class="connexButtonDivRecherche">
<button type="submit" class="btn btn-outline-light btnRecherche">Ajouter</button>
</div>

</form>