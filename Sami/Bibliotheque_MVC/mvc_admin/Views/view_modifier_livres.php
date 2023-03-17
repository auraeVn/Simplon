<form class="formConnex" method="post" action="?controller=livre&action=traitement_modifier_livres&id=<?= $ModifiersLivres->$Id ?>">

    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" placeholder="ISBN" name="Isbn" value='<?= $ModifiersLivres->ISBN; ?>'>
    </div>

    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" placeholder="Titre" name="titre" value='<?= $ModifiersLivres->Titre; ?>'>
    </div>

    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" placeholder="Thème" name="theme" value='<?= $ModifiersLivres->Theme; ?>'>
    </div>

    <div class="input-group flex-nowrap">
        <input type="number" class="form-control" placeholder="Nombre de pages" name="pages" value='<?= $ModifiersLivres->Nombre_de_pages; ?>' min="1" max="1000" required>
    </div>

    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" placeholder="Format" name="format" value='<?= $ModifiersLivres->Format; ?>'>
    </div>

    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" placeholder="Nom Auteur.e" name="nom" value='<?= $ModifiersLivres->Nom_Auteur; ?>' minlength="2" maxlength="30" required>
    </div>

    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" placeholder="Prénom Auteur.e" name="prenom" value='<?= $ModifiersLivres->Prenom_Auteur; ?>' minlength="2" maxlength="30" required>
    </div>

    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" placeholder="Editeur" name="editeur" value='<?= $ModifiersLivres->Editeur; ?>'>
    </div>

    <div class="input-group flex-nowrap">
        <input type="number" class="form-control" placeholder="Année d'édition" name="annee" value='<?= $ModifiersLivres->Annee_edition; ?>'>
    </div>

    <div class="input-group flex-nowrap">
        <input type="number" class="form-control" placeholder="Prix" name="prix" value='<?= $ModifiersLivres->Prix; ?>' min="1" max="1000" required>
    </div>

    <div class="input-group flex-nowrap">
        <input type="number" class="form-control" placeholder="Langue" name="langue" value='<?= $ModifiersLivres->Langue; ?>'>
    </div>

    <div class="connexButtonDivRecherche">
        <button type="submit" class="btn btn-outline-light btnRecherche">Modifier</button>
    </div>

</form>
