<?php
/*
    control Structure
     -Switch 

     Syntax
     switch ($variable) {
        case 1'value':
            # code...1
            break;
            case 2'value':
            # code...2
            break;
            case 3'value':
            # code...3
            break;
        default:
            # code...
            break;
     }
*/

$day = "Mon";

switch ($day) {
    case 'Sat':
        echo "Hello Today Is $day We Are Open From 10 AM : 1 AM ";
        break;
    case 'Sun':
        echo "Hello Today Is $day We Are Open From 12 AM : 12 PM ";
        break;
    case 'Mon':
        echo "Hello Today Is $day We Are Open From 8 AM : 10 pm  ";
        break;

    default:
        echo " UnKnown Day";
        break;
}
