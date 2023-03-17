

<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>Code</th>
			<th>Nom</th>
			<th>Adresse</th>
			<th>Code Postal</th>
			<th>Ville</th>
			<th>Pays</th>
			<th>Télephone</th>
			<th>Website</th>
			<th>Email</th>
            <th>Fax</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($localiteFournisseurs as $f):?>
			<tr>
				<td> <?=$f->code_fournisseurs?> </td>
				<td> <?=$f->raison_sociale?> </td>
				<td> <?=$f->rue_fournisseurs?> </td>
				<td> <?=$f->code_postal?> </td>
				<td> <?=$f->localite?> </td>
				<td> <?=$f->pays?> 
                <td> <?=$f->tel_fournisseurs?> 
				<td> <?=$f->url_fournisseurs?> </td>
				<td> <?=$f->email_fournisseurs?> </td>
				<td> <?=$f->fax_fournisseurs?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>