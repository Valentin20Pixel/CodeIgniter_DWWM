<?php
include "header.php";
echo validation_errors();
echo form_open_multipart();
?>

<body>
	<div class="container-fluid">


		<div class="form-group">
			<label for="cat_nom">Nommer une categorie</label>
			<input type="text" name="cat_nom" id="cat_nom" class="form-control">
		</div>
		<div class="form-group">
			<label for="cat_parent">A t'il une categorie parent? Si oui selectionné une categorie :</label>
			<select class="custom-select" name="cat_parent" id="cat_parent">
				<option selected value="">Catégorie</option>
				<?php foreach ($categories as $categorie) { ?>
					<option value="<?php echo set_value('cat_parent', $categorie->cat_id); ?>"> <?= $categorie->cat_id . '.' . $categorie->cat_nom ?></option>
				<?php } ?>
			</select>
		</div>

		<button type="submit" class="btn btn-success">Ajouter la categorie</button>
		</form>
	</div>

		<?php include("footer.php"); ?>