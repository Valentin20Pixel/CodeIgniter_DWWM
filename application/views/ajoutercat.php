<?php
include "header.php";
echo validation_errors();
echo form_open_multipart();
?>

<body>
	<div class="container-fluid">


		<div class="form-group">
			<label for="cat_id">Nommer une categorie</label>
			<input type="text" name="cat_id" id="cat_id" class="form-control">
		</div>


		<button type="submit" class="btn btn-success">Ajouter la categorie</button>
		</form>
	</div>

		<?php include("footer.php"); ?>