<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title>Fantasy Character Generator</title>
        <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   #<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- brings in the google pacifico font-->
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
         <style>
            .col-md-4 {
                height: 500px;
                padding: 10pt;
            }
            p{
                margin-left: 8px;
            }
            
             .container-fluid{
                 margin-top: 40px;
             }
        </style>
    </head>
    <body>
        <?php
    include "../nav.php";
    ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"><header class="h2">Character Creator</header></div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form method = "post" action = "ResultPage.php">
                        <div class="form-group">
                            <lable for="HeroName">Name</lable>
                            <input type="text" name="HeroName" id="HeroName"><br>
                            <lable for="Race">Race</lable>
                            <select name="Race" id="Race">
                                <option value ="Human">Human</option>
                                <option value ="Elf">Elf</option>
                                <option value ="Halfling">Halfling</option>
                                <option value ="Dwarf">Dwarf</option>
                            </select>
                            <br>
                            <lable for="Class">Class</lable>
                            <select name="Class" id="Class">
                                <option value ="Cleric">Cleric</option>
                                <option value ="Fighter">Fighter</option>
                                <option value ="Magic-User">Magic-User</option>
                                <option value ="Thief">Thief</option>
                            </select>
                            <br>
                            <lable for="Age">Age</lable>
                            <input type="text" name="Age" id="Age">
                            <br>
                            <lable for="Gender">Gender:</lable>
                            <div id="Gender" class="form-check form-check-inline">
                                <input type="radio" value="Male" name="gender" class="form-check-input" id="genderM" checked="checked"><lable for="genderM">Male</lable>  
                                <input type="radio" value="Female" name="gender" class="form-check-input" id="genderF"><lable for="genderF">Female</lable>
                            </div>
                            <br>
                            <lable for="KingdomName">Kingdom</lable>
                            <input type="text" name="KingdomName" id="KingdomName">
                            <br>
                            <input type="submit" name="Create" value="Create Me">              
                            
                        </div>
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="../../../vendor/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- Plugin JavaScript -->
        <script src="../../../vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>

        <!-- Contact Form JavaScript -->
        <script src="../../../js/jqBootstrapValidation.min.js" type="text/javascript"></script>
        <script src="../../../js/contact_me.min.js" type="text/javascript"></script>

        <!-- Custom scripts for this template -->
        <script src="../../../js/freelancer.min.js" type="text/javascript"></script>
    </body>
</html>
