<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'mh' => [
        'title' => 'Mh',

        'actions' => [
            'index' => 'Mh',
            'create' => 'New Mh',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'codigo' => 'Codigo',
            'proyecto' => 'Proyecto',
            'documento' => 'Documento',
            'adjudicatario' => 'Adjudicatario',
            'fecha_ins' => 'Fecha ins',
            'programa' => 'Programa',
            'institucion_acreedora' => 'Institucion acreedora',
            'obs' => 'Obs',
            'fecha_reins' => 'Fecha reins',
            
        ],
    ],

    'mh' => [
        'title' => 'Mh',

        'actions' => [
            'index' => 'Mh',
            'create' => 'New Mh',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'codigo' => 'Codigo',
            'proyecto' => 'Proyecto',
            'documento' => 'Documento',
            'adjudicatario' => 'Adjudicatario',
            'fecha_ins' => 'Fecha ins',
            'institucion_acreedora' => 'Institucion acreedora',
            'obs' => 'Obs',
            'fecha_reins' => 'Fecha reins',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];