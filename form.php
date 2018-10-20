<!--htmlspetialchars()
strip_tags()-->
<?php
    /*$userName;
    $userLastname;
    $userEmail;
    $userPassword;
    $userGender;
    $userDateOfBirdth;*/

    function CheckCountNumbers($setValue, $getValue){
        if(count($getValue)>= 3 && isset($getValue)){
            $setValue = strip_tags($getValue);
        } else {
            echo "Вводимые значения должны содержать не менее 3-х символов!";
        }
    }

    CheckCountNumbers($userName, strip_tags($_POST['uName']));
    CheckCountNumbers($userLastname, strip_tags($_POST['lastname']));
    CheckCountNumbers($userEmail, strip_tags($_POST['email']));
    CheckCountNumbers($userPassword, strip_tags($_POST['password']));
    if(isset($_POST['gridRadios'])){
        $userGender = $_POST['gridRadios'];
    }
    if (isset($_POST['date'])){
        $userDateOfBirdth = $_POST['date'];
    }
    $allUserValues = $userName.' '.$userLastname.' '.$userEmail.' '.$userPassword.' '.$userGender.' '.$userDateOfBirdth."<br>";
    echo $allUserValues;
    ?>