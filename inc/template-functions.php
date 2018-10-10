<?php
/**
 * Created by PhpStorm.
 * User: simonva
 * Date: 10/10/18
 * Time: 18:23
 */

function get_randsnowy_font() {

    switch (rand(1,7)) {

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
            $fontClass = "ChristmasLights";
            break;
        case 6:
            $fontClass = "Snowinter";
            break;
        case 7:
            $fontClass = "CandyTime";
            break;
        default:
            $fontClass = "";
            break;
            
    }

    return $fontClass;

}

function can_enter_calendar($item_name) {

    $DATE_day = date('j');
    $DATE_month = date('n');

    if( ($DATE_month == 12 && $DATE_day >= intval($item_name)) || (current_user_can('editor') || current_user_can('administrator') )) {

        return true;

    }

    return false;

}