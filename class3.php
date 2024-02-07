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



// $age = array(
//     'Aslam'=>24,
//     'Shan'=>21,
//     'Akram'=>20,
// );
// echo "<pre>";
// print_r ($age['Aslam']);
// echo "</pre>";


// $age = array(
//     'Aslam'=>24,
//     'Shan'=>21,
//     'Akram'=>20,
// );

// print_r($age);

// echo "<br>";

// $person = array(
//     'id'=>101,
//     'name'=>'Aslam',
//     'age'=>24,
//     'address'=>array('Karachi','Lahore')
// );

// print_r($person['address'][2]=['Multan']);
// print_r($person);




// Numerical Array


// $num  = array(21,22,23,24,25,26,27,28,29,30);

// foreach($num as $value)
// {
//     echo "value is $value <br/>";
// }


// $num[0]="Ali";
// $num[1]="Akram";
// $num[2]=23;

// foreach($num as $value)
// {
//     echo "value is $value <br/>";
// }


// Associative Array

// $age = array(
//     "Aslam"=>20,
//     "khan" => 12,
//     "shan"=>71
// );

// echo "Age of Aslam is ".$age['Aslam']."<br/>";
// echo "Age of khan is ".$age['khan']."<br/>";
// echo "Age of shan is ".$age['shan']."<br/>";

// $age ['Aslam']="Adult";
// $age ['khan']="Child";
// $age ['shan']="senior Citizen";

// echo "Aslam is ".$age['Aslam']."<br/>";
// echo "Khan is ".$age['khan']."<br/>";
// echo "Shan is ".$age['shan']."<br/>";


// Multi Dimentional Array

// $contact = array(

//     array(
//         "Name"=>"David",
//         "Email"=>"david@gmail.com",
//         "Number"=>3125165
//     ),

//     array(
//         "Name"=>"peter",
//         "Email"=>"peter@gmail.com",
//         "Number"=>309737165
//     ),
//     array(
//         "Name"=>"jhon",
//         "Email"=>"jhon@gmail.com",
//         "Number"=>3257865165
//     )

// );


// echo "Email Id is Peter :";
// echo $contact[1]['Email']."<br/>";
// echo "Contact Number is David :";
// echo $contact[0]['Number']."<br/>";

// echo " Name is  :";
// echo $contact[2]['Name']."<br/>";
// echo "Contact Number is Jhon :";
// echo $contact[2]['Number']."<br/>";





// $student = array("Peter","David","Khan","Shan");
// echo "Names of the Student are :".$student[0].",".$student[1].",".$student[2].",".$student[3].".";

// SORT

// $student = array("Peter","David","Khan","Shan","Ali");
// sort($student);
// $lenght = count($student);
// for($x=0;$x<$lenght;$x++)
// {
//     echo $student [$x];
//     echo "<br/>";
// }


// ASORT

// $age = array("peter"=>"37","jhon"=>"34","David"=>"43");
// asort($age);
// foreach($age as $x => $x_value){
//     echo "Key=".$x.",value=".$x_value;
// }


// $age = array("peter"=>"35","jhon"=>"37","David"=>"43");
// ksort($age);
// foreach($age as $x => $x_value){
//     echo "Key=".$x.",value=".$x_value;
//     echo "<br/>";
// }


// $age = array("peter"=>"35","jhon"=>"37","David"=>"43");
// arsort($age);
// foreach($age as $x => $x_value){
//     echo "Key=".$x.",value=".$x_value;
//     echo "<br/>";
// }


// $age = array("peter"=>"35","john"=>"52","David"=>"43");
// krsort($age);
// foreach($age as $x => $x_value){
//     echo "Key=".$x.",value=".$x_value;
//     echo "<br/>";
// }



// $age = array("peter","john","David");
// rsort($age);
// foreach($age as $x => $x_value){
//     echo "Key=".$x.",value=".$x_value;
//     echo "<br/>";
// }





































































  


   



    ?>

    
</body>
</html>