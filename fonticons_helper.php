<?php
/**
 * Author: brendan@ignitedcoder.com
 * Date: 8/24/15
 * Hope this helps you, please at least leave my name in place
 * 
 * Update 2017-05-03
 * by Marius du Randt 
 * https://github.com/maruisd
 * 
 * Thanks to avenirer, for putting me on this path.
 * 
 * Load it
 * $this->load->helper('fonticons');
 * or 
 * autoload['helper'] = array('fonticons');
 * 
 * use it in view
 * echo fa_icon('','align-left');
 * echo gl_icon('','align-left');
 * 
 * Location: /application/helpers
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('fa_icon'))
{
   function fa_icon($icon_color='', $icon = '', $attributes = '')
        {
        if(!$icon_color)
            {
            $icon_color ='black';
            }
            return '<span style="color:'.$icon_color.'" class="fa fa-'.$icon.' '.$attributes.' aria-hidden="true">'.'</span>';
        }
}
if ( ! function_exists('gl_icon'))
{
    function gl_icon($icon_color='', $icon = '', $attributes = '')
        {
        if(!$icon_color)
            {
            $icon_color ='black';
            }
            return '<span style="color:'.$icon_color.'" class="glyphicon glyphicon-'.$icon.' '.$attributes.'" aria-hidden="true">'.'</span>';
        }
}
