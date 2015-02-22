<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Configuration php file. It contains variables used in the template
 *
 */

// Template variables
$template = array(
    'name'        => 'uAdmin',
    'version'     => '1.6.1',
    'author'      => 'pixelcave',
    'title'       => 'uAdmin - Professional, Responsive and Flat Admin Template',
    'description' => 'uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest',
    'header'      => '', // 'fixed-top', 'fixed-bottom'
    'layout'      => '', // 'fixed'
    'theme'       => '', // 'deepblue', 'deepwood', 'deeppurple', 'deepgreen', '' empty for default
    'active_page' => basename($_SERVER['PHP_SELF'])
);

// Primary navigation array (the primary navigation will be created automatically based on this array)
$primary_nav = array(
    array(
        'name'  => 'Dashboard',
        'url'   => 'index.php',
        'icon'  => 'fa fa-fire'
    ),
   
    array(
        'name'  => 'Reports',
        'icon'  => 'fa fa-table',
        'sub'   => array(
            array(
                'name'  => 'Sms Reports',
                'url'   => 'sms.php',
                'icon'  => 'fa fa-tint'
            ),
            array(
                'name'  => 'Voice Reports',
                'url'   => 'voice.php',
                'icon'  => 'fa fa-th'
            ),
            array(
                'name'  => 'Image Reports',
                'url'   => 'image.php',
                'icon'  => 'fa fa-pencil'
            )
        )
    ),
   
);