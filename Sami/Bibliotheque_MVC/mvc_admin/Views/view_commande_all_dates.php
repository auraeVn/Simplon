
<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>Numéro de commande</th>
			<th>ISBN</th>
			<th>Titre</th>
			<th>Nom Auteur</th>
			<th>Raison Sociale</th>
			<th>Date achat</th>
			<th>Prix</th>
			<th>Nombre exemplaires</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($commandesAllDates as $f):?>
			<tr>
				<td> <?=$f->Id_commande?> </td>
				<td> <?=$f->ISBN?> </td>
				<td> <?=$f->Titre?> </td>
				<td> <?=$f->Nom_Auteur?> </td>
				<td> <?=$f->raison_sociale?> </td>
				<td> <?=$f->date_achat?> </td>
                <td> <?=$f->prix_achat?> </td>
				<td> <?=$f->nombre_exemplaire?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>