<?php

$x=6;
$y=4;
$sum=$x+$y;
$Diff=$x-$y;
$Product=$x*$y;
$Division=$x/$y;
echo"Sum: $sum<br>";
echo"Differnce: $Diff<br>";
echo"Product: $Product<br>";
echo"Division: $Division<br>";

for($i=5;$i<=15;$i++){
    echo"$i<br>";
}
$unit=151;
if($unit<=50){
    echo"unit Price-Rs. 3.50/unit";
} else if($unit<=100){
    echo"unit Price-Rs. 4.00/unit";
}else if($unit<=150){
    echo"unit Price-Rs. 5.20/unit";
}else if($unit>150){
    echo"unit Price-Rs. 6.50/unit";
}

$weeknum=6;
switch($weeknum){
    case "1":
    echo"Today is Monday";
    break;
    case "2":
        echo"Today is Tuseday";
        break;
        case"3":
            echo"Today is Wednes day";
            break;
        
            case"4":
                echo"Today is Thurse day";
                break;
                case"5":
                echo"Today is Friday";
                break;
                case"6":
                    echo"Today is Saturday";
                    break;
                    case"7":
                        echo"Today is Sunday";
                        break;
                        default:
                        echo"Invalid Number";
}

$fruits=array("mango","Banana","Papaya","Pinapple","Apple");
foreach($fruits as $fruitname){
    echo"$fruitname <br>";
}


?>