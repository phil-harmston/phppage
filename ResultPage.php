<!DOCTYPE html>


<?php
#print_r($_POST);  //all caps is a super global
$heroName = $_POST['HeroName'];
$charType=$_POST['Race'];
$charClass=$_POST['Class'];
$age = $_POST['Age'];
$gender=$_POST['gender'];
$kingdom=$_POST['KingdomName'];

$beginning ='{';
$ending = '}';
$stats = array("Str" => 0, "Con" => 0, "Dex" => 0, "Wis" => 0, "Int"=>0, "Char"=>0);
$raceinfo = array ("Description" => "Desriction", "Restrictions" => "Restrictions", "Abilities" =>"Special Ablities");

                   
$hu_sub = substr($charType, 0, 2);
$ra_sub = substr($charClass, 0, 2);
$ge_sub = substr($gender, 0, 2);
$imgSource = "{$hu_sub}{$ra_sub}{$ge_sub}.jpg";

     
                 

$charfile = file_get_contents("ClassInfo.txt");
$racefile = file_get_contents("RaceInfo.txt");

$charpieces = explode("{", $charfile);
$racepieces = explode("{", $racefile);

  

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>A made Adventurer</title>
        <!-- Custom fonts for this theme -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->

        <link href="style.css" rel="stylesheet" type="text/css"/>
        <style>
            img {
                height: 500px;
                padding: 10pt;
            }
            p{
                margin-left: 8px;
            }
            
            .col-md-5{
                width: 700px;
                position:relative;
                left:10px;
                padding:50px;
                float:left;

            }
            .col-md-3{
                width:300px;
                position:relative;
                float:left;
                padding: 20px;
            }
        </style>
    </head>

    <body>
        <div id="CharacterSheet" class="container">
            <div class="row">
                
            </div>
            <div class="row">
                 <div class="col-md-3">
                     <h3 class="Content">The Brave Adventurer</h3>
                    <?php
                    foreach ($stats as $key => $value){//print random stats here
                        $value = rand(0,20);
                        echo "$key: $value <br>";
                    }
                    
                    ?>
                </div>
                <div class="col-md-5">
                    <?php
                    echo "<h2>$heroName from $kingdom</h2>";
                    echo "<b>$charType $charClass</b> at the age of $age";
                   
                    if($charClass=="Fighter"){
                    echo $charpieces[1];
                    }
                    if($charClass=="Cleric"){
                        echo $charpieces[2];
                    }
                    if($charClass=="Thief"){
                        echo $charpieces[3];
                    }
                    if($charClass=="Magic-User"){
                        echo $charpieces[4];
                    }

                    if($charType=="Human"){
                        echo $racepieces[1];
                    }
                    if($charType=="Elf"){
                        echo $racepieces[2];
                    }
                    if($charType=="Halfling"){
                        echo $racepieces[3];
                    }
                    if($charType=="Dwarf"){
                        echo $racepieces[4];
                    }  
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                    //print image here
                    print("<img src = images/" .$imgSource.">");
                    ?>
                </div>
            </div>
        </div>
       
    </body>
</html>
