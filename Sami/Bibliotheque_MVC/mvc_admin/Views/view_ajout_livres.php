<form class="formConnex" method="post" action="?controller=livre&action=ajout_all_livres">


   <div class="input-group flex-nowrap">
      <input type="text" class="form-control" placeholder="ISBN" name="Isbn">
   </div>

   <div class="input-group flex-nowrap">
      <input type="text" class="form-control" placeholder="Titre" name="titre">
   </div>

   <div class="input-group flex-nowrap">
      <input type="text" class="form-control" placeholder="Thème" name="theme">
   </div>

   <div class="input-group flex-nowrap">
      <input type="number" class="form-control" placeholder="Nombre de pages" name="pages" min="1" max="1000" required>
   </div>

   <div class="input-group flex-nowrap">
      <input type="text" class="form-control" placeholder="Format" name="format">
   </div>

   <div class="input-group flex-nowrap">
      <input type="text" class="form-control" placeholder="Nom Auteur.e" name="nom" minlength="2" maxlength="30" required>
   </div>

   <div class="input-group flex-nowrap">
      <input type="text" class="form-control" placeholder="Prénom Auteur.e" name="prenom" minlength="2" maxlength="30" required>
   </div>

   <div class="input-group flex-nowrap">
      <input type="text" class="form-control" placeholder="Editeur" name="editeur">
   </div>

   <div class="input-group flex-nowrap">
      <input type="number" class="form-control" placeholder="Année d'édition" name="annee">
   </div>

   <div class="input-group flex-nowrap">
      <input type="number" class="form-control" placeholder="Prix" name="prix" min="1" max="1000" required>
   </div>

   <div class="input-group flex-nowrap">
      <input type="text" class="form-control" placeholder="Langue" name="langue">
   </div>

   <div class="connexButtonDivRecherche">
      <button type="submit" class="btn btn-outline-light btnRecherche">Ajouter</button>
   </div>

</form>