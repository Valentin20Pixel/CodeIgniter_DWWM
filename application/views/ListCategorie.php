<?php
include "header.php";

?>
        <a href="<?= site_url("Categories/ajoutercat") ?>" class="btn btn-primary">Ajout de Categorie</a>

<table class="table table-hover table-sm table-responsive-sm">
            <tr class="headtable text-truncate">
                <th scope="col" class="sticky-top ">ID</th>
                <th scope="col" class="sticky-top ">Nom de la catégorie</th>
                <th scope="col" class="sticky-top ">Catégorie parent</th>
                <th scope="col" class="sticky-top ">Modifier</th>

            </tr>
            <?php foreach ($ListCategorie as $row) { ?>
                <tr class="bobytable">
                    <td name="idcat"><?= $row->cat_id ?></td>
                    <td><?= $row->cat_nom ?></td>
                    <td><?= $row->cat_parent ?></td>
                    <td><a href="<?= site_url("Categories/modifcat/" . $row->cat_id); ?>" class="btn btn-outline-warning">Modifier</a></td>

                </tr>
                <?php }; ?>
        </table>
        <a href="<?= site_url("Categories/ajoutercat") ?>" class="btn btn-primary">Ajout de Categorie</a>


<?php include("footer.php"); ?>