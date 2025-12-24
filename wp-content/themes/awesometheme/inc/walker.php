<?php

class Walker_Nav_Primary extends Walker_Nav_Menu{

    function start_lvl( &$output, $depth = 0, $args = null ){//ul
        $indent = str_repeat("\t", $depth);
        $submenu = ( $depth > 0 ) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";

    }



//    function start_el(){//li
//
//    }

//    function end_el(){// closing li
//
//    }
//
//    function end_lvl(){//closing ul
//
//    }
}
