<?php

get_header();

$context = array();

//Variables for first ball
$ball_1_title = get_field('title_1');
$ball_1_score = get_field('score_1');
$ball_1_color = get_field('color_1');
//Variables for second ball
$ball_2_title = get_field('title_2');
$ball_2_score = get_field('score_2');
$ball_2_color = get_field('color_2');
//Variables for third ball
$ball_3_title = get_field('title_3');
$ball_3_score = get_field('score_3');
$ball_3_color = get_field('color_3');

//Filling up content array for twig template
//Circle 1
$context['ball_1']['title'] = $ball_1_title;
$context['ball_1']['score'] = $ball_1_score;
$context['ball_1']['color'] = $ball_1_color;
//Circle 2
$context['ball_2']['title'] = $ball_2_title;
$context['ball_2']['score'] = $ball_2_score;
$context['ball_2']['color'] = $ball_2_color;
//Circle 2
$context['ball_3']['title'] = $ball_3_title;
$context['ball_3']['score'] = $ball_3_score;
$context['ball_3']['color'] = $ball_3_color;

Timber::render( 'task.twig', $context );

get_footer();