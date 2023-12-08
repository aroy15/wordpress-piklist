<?php
/**
 * Title: Dependency Demo
 * Post Type: post
 */

piklist('field', array(
    'type' => 'select',
    'field' => 'colors',
    'label' => __('Select a color', 'twentyseventeen'),
    'choices' => array(
        'red' => __('Red', 'twentyseventeen'),
        'green' => __('Green', 'twentyseventeen'),
        'cyan' => __('Cyan', 'twentyseventeen'),
        'other' => __('Other', 'twentyseventeen'),
    )
));
piklist('field', array(
    'type' => 'select',
    'field' => 'colors2',
    'label' => __('Select a secondary color', 'twentyseventeen'),
    'choices' => array(
        'red' => __('Red', 'twentyseventeen'),
        'green' => __('Green', 'twentyseventeen'),
        'cyan' => __('Cyan', 'twentyseventeen'),
        'other' => __('Other', 'twentyseventeen'),
    )
));
piklist('field', array(
    'type' => 'colorpicker',
    'field' => 'othercolor',
    'label' => __('Select color', 'twentyseventeen'),
    'value' => '#ff0000',
    'conditions'=> array(
        'relation' => 'or',
        array(
            'field' =>  'colors',
            'value' => 'cyan'
        ),
        array(
            'field' =>  'colors2',
            'value' => 'green'
        )
    )
)); 