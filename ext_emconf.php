<?php
/**
 * $EM_CONF
 *
 * @category   Extension
 * @author     codebobbly
 */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'Metaseo integration dvoconnector',
    'description'      => 'Integrate metaseo in the dvoconnector extension',
    'category'         => 'fe',
    'version'          => '1.0.0',
    'state'            => 'stable',
    'clearcacheonload' => 1,
    'author'           => 'codebobbly',
    'author_email'     => 'codebobbly@gmail.com',
    'constraints'      => [
        'depends' => [
            'typo3'       => '7.6.0-*',
            'dvoconnector' => '1.0.0-*',
            'metaseo' => '3.0.0-*',
            'metaseo_vhs' => '1.0.0-*',
        ],
    ],
];
