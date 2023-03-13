<?php
/*
Plugin Name: Mon plugin de feedback
Plugin URI: https://example.com/
Description: Ce plugin ajoute un formulaire de feedback à vos pages et enregistre les données soumises dans la base de données.
Version: 1.0
Author: Votre Nom
Author URI: https://example.com/
License: GPL2
*/
function mon_feedback_form()
{
    $content = '';
    $content .= '<form action="http://localhost/feedback/wordpress/thankssksks-2/" method="post">';
    $content .= '<p><label for="feedback_name">Nom</label><br><input type="text" name="feedback_name" id="feedback_name" required></p>';
    $content .= '<p><label for="feedback_email">Email</label><br><input type="email" name="feedback_email" id="feedback_email" required></p>';
    $content .= '<p><label for="feedback_message">Message</label><br><textarea name="feedback_message" id="feedback_message" required></textarea></p>';
    $content .= '<p><label for="feedback_rating">Note</label><br><select name="feedback_rating" id="feedback_rating" required>';
    $content .= '<option value="">--</option>';
    $content .= '<option value="1">1</option>';
    $content .= '<option value="2">2</option>';
    $content .= '<option value="3">3</option>';
    $content .= '<option value="4">4</option>';
    $content .= '<option value="5">5</option>';
    $content .= '</select></p>';
    $content .= '<p><input name="sub" type="submit" value="Envoyer"></p>';
    $content .= '</form>';
    return $content;
}
add_shortcode('feedback', 'mon_feedback_form');

function mon_feedback_save()
{
    if (isset($_POST["sub"])) {
        global $wpdb;
        $table_name = 'wp_feedback';
        $name = sanitize_text_field($_POST["feedback_name"]);
        $email = sanitize_email($_POST["feedback_email"]);
        $message = sanitize_textarea_field($_POST["feedback_message"]);
        $rating = intval($_POST["feedback_rating"]);
        $wpdb->insert(
            $table_name,
            array(
                'time' => current_time('mysql'),
                'name' => $name,
                'email' => $email,
                'message' => $message,
                'rating' => $rating,
            )
        );
    }
}
add_action('wp_head', 'mon_feedback_save');
