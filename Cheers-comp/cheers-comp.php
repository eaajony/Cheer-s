<?php
/**
*Plugin Name: Cheers-comp
*Plugin URI: https://nicolinegrand.dk/cheers
*Description: This is a WordPress Newsletter Plugin based on HTML5, CSS, JS and PHP
*Version: 1. 5.6
*Author: Johannes Nysted
*Author URI: https://nicolinegrand.dk/cheers
*License: GPL2
**/
function newsletter_form()
{
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<div class="login-face">';
    $content .= '<img src=" '.plugins_url("cheers-comp/mads-fra-cheers.png").' " ';
    $content .= 'alt="login-face"></div>';
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title">MODTAG EN RABATKODE PÅ 10%! <br> INDTAST DIN E-MAIL!</h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
    $content .= '<div id="promotion-body">';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="email@cheers.com" name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="Klik her, når du har indtastet din E-mail!">';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_cheers-comp','newsletter_form');
    # Come back later
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap');
        
        wp_enqueue_style('CustomFontPoppins','https://fonts.googleapis.com/css?family=Poppins&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('cheers-comp/style123.css'));
        
        
        wp_enqueue_script('CustomScript', plugins_url('cheers-comp/script.js'), array('jquery'), null, true);
    }
?>