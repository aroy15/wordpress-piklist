<?php
/**
 * Title: Some Metabox Title
 * Post Type: Post
 */
 piklist('field', array(
    'type' => 'text',
    'field' => 'testfield1',
    'label' => __('My Field', 'twentyseventeen'),
    'value' => 'test default',
    'attributes' => array(
        'class' => 'widefat'
    )
 ));
 piklist('field', array(
    'type' => 'colorpicker',
    'field' => 'colorfield1',
    'label' => __('My Color', 'twentyseventeen'),
    'value' => '#ff0000'
 ));
 piklist('field', array(
    'type' => 'text',
    'field' => 'favfoods',
    'label' => __('My Favorite Foods', 'twentyseventeen'),    
    'attributes' => array(
        'class' => 'widefat'
    ),
    'add_more'=> true,
 ));

 