<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // if

    // $a = 18;
    // if($a==5)
    // {
    //     echo "Condition is True";
    // }

// ifElse
    // if($a==5)
    // {
    //     echo "Condition is True";
    // }else{
    //     echo "Condition is False";
    // }

// Elseif
    // if($a>=18)
    // {
    //     echo "You Can Vote"; 
    // }elseif($a>=15)
    // {
    //     echo "You Can Vote after three year";
    // }elseif($a>=10)
    // {
    //     echo "You Can Vote after Eight Year";
    // }
    
// Switch Case

//     $lang = "php";

//     switch($lang){
//         case "C#":
//             echo "Favourite language is C#";
//             break;
//             case "java":
//                 echo "Favourite language is java";
//                 break;
//                 case "laarvel":
//                     echo "Favourite language is Laravel";
//                     break;
//                     case "php":
//                         echo "Favourite language is php";
//                         break;
//                         default :
//                         echo "data not found";

//     }


// // Nested If

//     $age = 26;
//     if($age>=18)
//     {
//         if($age<=25)
//         {
//             echo "Yes You can Vote";
//         }
//         else{
//             echo "You cannot vote more";
//     }
// }
// else{
//     echo "You cannot Vote";
// }



// Index Array

// $color = array("red","green","blue");
// print_r($color);


// $color = array("red","green","blue");
// echo "<pre>";
// print_r($color);
// echo "</pre>";


// $color = array("red","green","blue");
// $color [3]="White";
// $color [4]="Yellow";


// echo "<pre>";
// print_r($color);
// echo "</pre>";



$age = array(
    'Aslam'=>24,
    'Shan'=>21,
    'Akram'=>20,
);
echo "<pre>";
print_r ($age['Aslam']);
echo "</pre>";


$age = array(
    'Aslam'=>24,
    'Shan'=>21,
    'Akram'=>20,
);

print_r($age);

echo "<br>";

$person = array(
    'id'=>101,
    'name'=>'Aslam',
    'age'=>24,
    'address'=>array('Karachi','Lahore')
);

print_r($person['address'][2]=['Multan']);
print_r($person);













  


   



    ?>

    <!-- <pre>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptas ad obcaecati.
    </pre> -->
</body>
</html>