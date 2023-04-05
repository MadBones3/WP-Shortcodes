<?php
/*
*    
*   Shortcode for to show a buton in the WYSIWYG editor
*   
*/

add_shortcode( 'wysiwyg-button', 'shortcode_wysiwyg_button');
function shortcode_wysiwyg_button( $atts ) {

    $default = array(
        'link' => '#',
        'text' => '',
        'colour' => 'orange',
        'style' => '',
    );
    $a = shortcode_atts( $default, $atts );
    
    $value = '<div class="wysiwyg-button">';

        if ( !empty( $a['link'] ) || !empty( $a['text'] ) ) {
          
          if( in_array( $a['style'], array( "outline" ) ) ) {
            $svg = '<span class="outline-arrow"><svg width="36" height="11" viewBox="0 0 36 11" xmlns="http://www.w3.org/2000/svg"><path d="M30.63 10v1h-1v-1h1zm1-1v1h-1V9h1zm1-1v1h-1V8h1zm1-1v1h-1V7h1zm-33-1V5h33V4h1v1h1v1h-1v1h-1V6h-33zm33-3v1h-1V3h1zm-1-1v1h-1V2h1zm-1-1v1h-1V1h1zm-1-1v1h-1V0h1z" fill="#FFF" fill-rule="evenodd"/></svg></span>';
          } else {
            $svg = '<svg width="36" height="11" viewBox="0 0 36 11" xmlns="http://www.w3.org/2000/svg"><path d="M30.63 10v1h-1v-1h1zm1-1v1h-1V9h1zm1-1v1h-1V8h1zm1-1v1h-1V7h1zm-33-1V5h33V4h1v1h1v1h-1v1h-1V6h-33zm33-3v1h-1V3h1zm-1-1v1h-1V2h1zm-1-1v1h-1V1h1zm-1-1v1h-1V0h1z" fill="#FFF" fill-rule="evenodd"/></svg>';
          }

          $value .= '<a class="button after '. $a['colour'] .'-one '. $a['style'] .'" href="'.$a['link'].'">'.$a['text'] . ' ' . $svg . '</a>';

        } else {
            return '';
        }
        
        
    $value .= '</div>';


    return $value;

}
