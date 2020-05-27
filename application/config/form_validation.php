<?php
$config = array(
    'produits/ajouter' => array(
        array(
            // Reference
            'field' => 'pro_ref',
            'label' => 'pro_ref',
            'rules' => 'required|trim|stripslashes|strip_tags|alpha_numeric_spaces|is_unique[jdt_produits.pro_ref]',
            'errors'=> array(
                'required' => 'La %s doit être renseignée.',
                'is_unique' => 'La %s existe déjà.',
                'alpha_numeric_spaces' => 'La %s n\'est pas valide.'
            ),
        ),
        array(
            // Categorie
            'field' => 'pro_cat_id',
            'label' => 'pro_cat_id',
            'rules' => 'required',
            'errors'=> array(
                'required' => 'La %s doit être renseignée.'
            ),
        ),
        array(
            // Libelle
            'field' => 'pro_libelle',
            'label' => 'pro_libelle',
            'rules' => 'required|trim|alpha_numeric_spaces',
            'errors'=> array(
                'required' => 'Le %s doit être renseigné.',
                'alpha_numeric_spaces' => 'Le %s n\'est pas valide.'
            ),
        ),
        array(
            // Description
            'field' => 'pro_description',
            'label' => 'pro_description',
            'rules' => 'trim|alpha_numeric_spaces',
            'errors'=> array(
                'alpha_numeric_spaces' => 'La %s n\'est pas valide.'
            ),
        ),
        array(
            //Prix 
            'field' => 'pro_prix',
            'label' => 'pro_prix',
            'rules' => 'required|trim|decimal',
            'errors'=> array(
                'required' => 'Le %s doit être renseignée.',
                'decimal' => 'Un format décimal est requis pour le prix.'
            ),
        ),
        array(
            // Stock
            'field' => 'pro_stock',
            'label' => 'pro_stock',
            'rules' => 'trim|is_natural',
            'errors'=> array(
                'is_natural' => 'La valeur n\'est pas valide.'
            ),
        ),
        array(
            // Couleur
            'field' => 'pro_couleur',
            'label' => 'pro_couleur',
            'rules' => 'trim|alpha',
            'errors'=> array(
                'alpha' => 'La %s n\'est pas valide.'
            ),
        ),
        array(
            // Photo
            'field' => 'pro_photo',
            'label' => 'pro_photo',
            'rules' => 'trim|alpha_numeric_point',
            'errors'=> array(
                'alpha' => 'L\'extension %s n\'est pas valide.'
            ),
        ),
        array(
            // Bloque
            'field' => 'pro_bloque',
            'label' => 'bloque',
            'rules' => 'trim|exact_length[1]|is_natural',
            'errors'=> array(
                'is_natural' => 'La valeur n\'est pas valide.',
                'exact_length' => 'La valeur n\'est pas valide.',

            ),
        )
    ),
    'produits/modifier' => array(
        array(
            // Reference
            'field' => 'pro_ref',
            'label' => 'pro_ref',
            'rules' => 'required|trim|alpha_numeric_spaces|is_unique[jdt_produits.pro_ref]',
            'errors'=> array(
                'required' => 'La %s doit être renseignée.',
                'alpha_numeric_spaces' => 'La %s n\'est plus valide.'
            ),
        ),
        array(
            // Categorie
            'field' => 'pro_cat_id',
            'label' => 'pro_cat_id',
            'rules' => 'required',
            'errors'=> array(
                'required' => 'La %s doit être renseignée.'
            ),
        ),
        array(
            // Libelle
            'field' => 'pro_libelle',
            'label' => 'pro_libelle',
            'rules' => 'required|trim|alpha_numeric_spaces',
            'errors'=> array(
                'required' => 'Le %s doit être renseigné.',
                'alpha_numeric_spaces' => 'Le %s n\'est plus valide.'
            ),
        ),
        array(
            // Description
            'field' => 'pro_description',
            'label' => 'pro_description',
            'rules' => 'trim|alpha_numeric_spaces',
            'errors'=> array(
                'alpha_numeric_spaces' => 'La %s n\'est plus valide.'
            ),
        ),
        array(
            // Prix
            'field' => 'pro_prix',
            'label' => 'pro_prix',
            'rules' => 'required|trim|numeric',
            'errors'=> array(
                'required' => 'Le %s doit être renseignée.',
                'decimal' => 'Un format décimal est requis pour le prix.'
            ),
        ),
        array(
            // Stock
            'field' => 'pro_stock',
            'label' => 'pro_stock',
            'rules' => 'trim',
            'errors'=> array(
                'is_natural' => 'La valeur n\'est plus valide.'
            ),
        ),
        array(
            // Couleur
            'field' => 'pro_couleur',
            'label' => 'pro_couleur',
            'rules' => 'trim|alpha',
            'errors'=> array(
                'alpha' => 'La %s n\'est plus valide.'
            ),
        ),
        array(
            // Photo
            'field' => 'pro_photo',
            'label' => 'pro_photo',
            'rules' => 'trim|alpha',
            'errors'=> array(
                'alpha' => 'L\'extension %s n\'est plus valide.'
            ),
        ),
        array(
            // Bloque
            'field' => 'pro_bloque',
            'label' => 'bloque',
            'rules' => 'trim|exact_length[1]',
            'errors'=> array(
                'is_natural' => 'La valeur n\'est plus valide.',
                'exact_length' => 'La valeur n\'est plus valide.',

            ),
        )
    ),
    'Categories/ajoutercat' => array(
        array(
            // Nom categorie
            'field' => 'cat_nom',
            'label' => 'cat_nom',
            'rules' => 'required|trim|alpha_numeric_spaces|is_unique[jdt_categories.cat_id]',
            'errors'=> array(
                'required' => 'La %s doit être renseignée.',
                'alpha_numeric_spaces' => 'La %s n\'est plus valide.'
            ),
        ),
    ),
    'Categories/modifcat' => array(
        array(
            // Nom categorie
            'field' => 'cat_nom',
            'label' => 'cat_nom',
            'rules' => 'required|trim|alpha_numeric_spaces|is_unique[jdt_categories.cat_id]',
            'errors'=> array(
                'required' => 'La %s doit être renseignée.',
                'alpha_numeric_spaces' => 'La %s n\'est plus valide.'
            ),
        ),
    ),
);