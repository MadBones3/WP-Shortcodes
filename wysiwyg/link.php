<?php
/*
*    
*   Shortcode for to show a link in the WYSIWYG editor
*   
*/

add_shortcode( 'wysiwyg-link', 'shortcode_wysiwyg_link');
function shortcode_wysiwyg_link( $atts ) {

    $default = array(
        'link' => '#',
        'icon' => '',
        'colour' => 'orange',
    );
    $a = shortcode_atts( $default, $atts );
    if(!empty($a['colour']) && $a['colour'] === 'white') {
        $color = 'white';
    } else {
        $color = 'orange';
    }
    
    $value = '<div class="wysiwyg-link '.$color.'">';

        if ( !empty( $a['icon'] ) || $a['icon'] === '' ) {
            // Phone
            if ( $a['icon'] === 'phone' ) {
                $value .= '<div class="link tel">';
                if( in_array( $a['colour'], array( "white" ) ) ) {
                    $value .= '<i>';
                        $value .= '<svg width="16" height="11" viewBox="0 0 16 11" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 8v3H0V8h4zm6 0v3H6V8h4zm6 0v3h-4V8h4zM3 9H1v1h2V9zm6 0H7v1h2V9zm6 0h-2v1h2V9zM4 4v3H0V4h4zm6 0v3H6V4h4zm6 0v3h-4V4h4zM3 5H1v1h2V5zm6 0H7v1h2V5zm6 0h-2v1h2V5zM4 0v3H0V0h4zm6 0v3H6V0h4zm6 0v3h-4V0h4zM3 1H1v1h2V1zm6 0H7v1h2V1zm6 0h-2v1h2V1z" fill="#FFF" fill-rule="nonzero"/>
                        </svg>';
                    $value .= '</i>';
                } else {
                    $value .= '<i>';
                        $value .= '<svg width="16" height="11" viewBox="0 0 16 11" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 8v3H0V8h4zm6 0v3H6V8h4zm6 0v3h-4V8h4zM3 9H1v1h2V9zm6 0H7v1h2V9zm6 0h-2v1h2V9zM4 4v3H0V4h4zm6 0v3H6V4h4zm6 0v3h-4V4h4zM3 5H1v1h2V5zm6 0H7v1h2V5zm6 0h-2v1h2V5zM4 0v3H0V0h4zm6 0v3H6V0h4zm6 0v3h-4V0h4zM3 1H1v1h2V1zm6 0H7v1h2V1zm6 0h-2v1h2V1z" fill="#FA9C1E" fill-rule="nonzero"/>
                        </svg>';
                    $value .= '</i>';
                }
                    $plainTel = preg_replace("/[^+0-9]/", "", preg_replace("/\([^)]+\)/","", $a['link'] ) );
                    if ( ! empty( $plainTel ) ) {
                      $value .= '<a href="tel:'.$plainTel.'">'.$a['link'].'</a>';
                    } else { 
                      $value .= '<a href="'.$a['link'].'">'.$a['link'].'</a>';
                    }
                    

                $value .= '</div>';
            }
            // Email
            if ( $a['icon'] === 'email' ) {
                $value .= '<div class="link email">';
                if(in_array( $a['colour'], array( "white" ) )) {
                    $value .= '<i>';
                        $value .= '<svg width="16" height="11" viewBox="0 0 16 11" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 11H0V0h16v11zM9 7v1H7V7h2zM7 6v1H6V6h1zm3 0v1H9V6h1zM6 5v1H5V5h1zm5 0v1h-1V5h1zM5 4v1H4V4h1zm7 0v1h-1V4h1zM4 3v1H3V3h1zm9 0v1h-1V3h1zM3 2v1H2V2h1zm11 0v1h-1V2h1zm1 8V2h-1V1H2v1H1v8h14z" fill="#FFF" fill-rule="evenodd"/>
                        </svg>';
                    $value .= '</i>';
                } else {
                    $value .= '<i>';
                        $value .= '<svg width="16" height="11" viewBox="0 0 16 11" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 11H0V0h16v11zM9 7v1H7V7h2zM7 6v1H6V6h1zm3 0v1H9V6h1zM6 5v1H5V5h1zm5 0v1h-1V5h1zM5 4v1H4V4h1zm7 0v1h-1V4h1zM4 3v1H3V3h1zm9 0v1h-1V3h1zM3 2v1H2V2h1zm11 0v1h-1V2h1zm1 8V2h-1V1H2v1H1v8h14z" fill="#FA9C1E" fill-rule="evenodd"/>
                        </svg>';
                    $value .= '</i>';
                }  
                $value .= '<a href="mailto:'.$a['link'].'">'.$a['link'].'</a>';
                $value .= '</div>';
            }

        } else {
            return '';
        }
        
        
    $value .= '</div>';


    return $value;

}
