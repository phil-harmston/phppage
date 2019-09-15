<!DOCTYPE html>


<?php
#print_r($_POST);  //all caps is a super global
# Set up vars for our input
$heroName = $_POST['HeroName'];
$charType=$_POST['Race'];
$charClass=$_POST['Class'];
$age = $_POST['Age'];
$gender=$_POST['gender'];
$kingdom=$_POST['KingdomName'];

#Stats array to randomize
$stats = array("Str" => 0, "Con" => 0, "Dex" => 0, "Wis" => 0, "Int"=>0, "Char"=>0);

# Substrings to get the correct image                  
$hu_sub = substr($charType, 0, 2);
$ra_sub = substr($charClass, 0, 2);
$ge_sub = substr($gender, 0, 2);

# concatinate substrings to get a file name
$imgSource = "{$hu_sub}{$ra_sub}{$ge_sub}.jpg";
                 
# Read the files into a sting var
$charfile = file_get_contents("ClassInfo.txt");
$racefile = file_get_contents("RaceInfo.txt");

# Explode the files on the opening bracket
# creates and array of the vars
$charpieces = explode("{", $charfile);
$racepieces = explode("{", $racefile);


?>

<html>
    <head>
        <meta charset="utf-8">
        <title>A made Adventurer</title>
        <meta charset="utf-8">
       
    
   #<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="icon" href="http://sparksjourney.com/img/favicon.ico">
<link rel="stylesheet" type="text/css" href="http://sparksjourney.com/css/style.css">
<!-- brings in the google pacifico font-->
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Theme CSS -->
        <!-- CSS Padding to fix the layout of the page -->

        <link href="style.css" rel="stylesheet" type="text/css"/>
        <style>
            .col-md-4 {
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
        <!-- include the nav bar for consistency -->
        <?php
    include "../nav.php";
    ?>
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
                    # Echo the heroName and kingdom
                    echo "<h2>$heroName from $kingdom</h2>";
                    echo "<b>$charType $charClass</b> at the age of $age";
                   
                    # get the character class from the user 
                    # and post the correct information
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
                    
                    # get the character type and post the 
                    # correct information
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
                    # print image here
                    print("<img src = images/" .$imgSource.">");
                    ?>
                </div>
            </div>
        </div>
       
    </body>
</html>
