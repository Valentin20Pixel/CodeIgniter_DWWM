<?php include "header.php";
	echo validation_errors();?>
<?php echo form_open_multipart(); ?>

<body>
<button class="btn btn-outline-danger"><a href="<?= site_url("http://localhost/ci/index.php"); ?>"> Retour aux produits</a></button>
<?= var_dump($produit);?>    

<div class="form-group">
    <label for="supp" class="">Etes vous sur de vouloir supprimer le produit?</label>
</div>
<?= var_dump($aView->$id);?>
<button class="btn btn-outline-secondary" type="submit" value="<?=$produit->pro_id;?>" >Valider</button>
</form>

</div>