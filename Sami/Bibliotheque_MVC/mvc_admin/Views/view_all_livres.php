<div class="container-fluid tableC">
<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>ISBN</th>
			<th>Titre</th>
			<th>Thème</th>
			<th>Nombre de page</th>
			<th>Format</th>
			<th>Nom Auteur</th>
			<th>Prénom Auteur</th>
			<th>Editeur</th>
			<th>Année d'édition</th>
			<th>Prix</th>
			<th>Langue</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($livres as $l):?>
			<tr>
				<td><a href="" class="isbn"><?=$l->ISBN?></a></td>
				<td> <?=$l->Titre?> </td>
				<td> <?=$l->Theme?> </td>
				<td> <?=$l->Nombre_de_pages?> </td>
				<td> <?=$l->Format?> </td>
				<td> <?=$l->Nom_Auteur?> </td>
				<td> <?=$l->Prenom_Auteur?> </td>
				<td> <?=$l->Editeur?> </td>
				<td> <?=$l->Annee_edition?> </td>
				<td> <?=$l->Prix?> </td>
				<td> <?=$l->Langue?> </td>
				<td><a href='?controller=livre&action=modifier_livres&id="<?=$l->Id?>"'><img src='Content/edit.png'></a></td>
				<td><a href='?controller=livre&action=supprimer_livres&id="<?=$l->Id?>"'><img src='Content/delete.png'></a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<div class="containerApi"></div>
</div>