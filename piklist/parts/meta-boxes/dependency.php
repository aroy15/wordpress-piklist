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
    )
));