<?php
/**
 * Created by PhpStorm.
 * User: simonva
 * Date: 10/10/18
 * Time: 18:23
 */

function get_randsnowy_font() {

    switch (rand(1,6)) {

        case 1:
            $fontClass = "HappyChristmas";
            break;
        case 2:
            $fontClass = "CartoonBlocks";
            break;
        case 3:
            $fontClass = "ChristmasCandies";
            break;
        case 4:
            $fontClass = "iLoveChristmas";
            break;
        case 5:
            $fontClass = "Snowinter";
            break;
        case 6:
            $fontClass = "CandyTime";
            break;
        default:
            $fontClass = "";
            break;
            
    }

    return $fontClass;

}

function can_enter_calendar($item_name) {

    $calendar_edition = "2018-12-";

    $today = strtotime(date('Y-m-d'));
    $item_date = strtotime($calendar_edition.$item_name);

    if( $item_date <= $today || (current_user_can('editor') || current_user_can('administrator') )) {

        return true;

    }

    return false;

}