<?php

function getCarDescription(int $year):void {


switch ($year) {
    case $year < 1960: 
        echo "To je fakt veterán!";
        break; 
    case $year < 1990: 
        echo "Auto by na silnici už raději být nemělo";
        break;
    case $year < 2000: 
        echo "Budete platit velkou silniční daň i povinné ručení";
        break;
    case $year < 2010: 
         echo "Navštěvujte servis pravidelně" ;
        break; 
    default:
        echo "Auto je způsobilé";  

}

 }

 function enginetax(int $ENGINE):void {

    switch ($ENGINE) {
      case $ENGINE < 800;
        echo "1200 Kč";
        break;
        case $ENGINE <= 1250;
        echo "1800 Kč";
        break;
        case $ENGINE <= 1500;
        echo "2400 Kč";
        break;
        case $ENGINE <= 2000;
        echo "3000 Kč";
        break;
        case $ENGINE <= 3000;
        echo "3600 Kč";
        break;
        case $ENGINE > 3000;
        echo "4200 Kč";
        break;
    }
  }
