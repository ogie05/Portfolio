<?php
function emptyInputRegister($name,$user,$mail,$pass,$pass2){
    $result;
    if(empty($name)||empty($user)||empty($mail)||empty($pass)||empty($pass2)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($user){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $user)) {
     $result = true;   
    }else{
        $result = false;
    }
    return $result;
}

function invalidEmail($mail){
    $result;
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function passmatch($pass,$pass2){
    if($pass !== $pass2){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function userTaken($conn,$user,$mail){
    $sql = "SELECT * FROM account where acc_Username = ? or acc_Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../register.php?error=stmt-failed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$user,$mail);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function  createUser($conn, $name,$user,$mail,$pass){
    $sql = "INSERT INTO account (fullname,acc_Username,acc_Password,acc_Email) values (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../register.php?error=stmt-failed");
        exit();
    }

    $hashedPwd = password_hash($pass,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss",$name,$user,$hashedPwd,$mail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../register.php?error=none");
    exit();
}

function emptyinputLogin($user,$pass){
    $result;
    if (empty($user) || empty($pass)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function loginUser($conn,$user,$pass){
    $uidExist=userTaken($conn,$user,$user);
    if ($uidExist === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    $passHash = $uidExist['acc_Password'];
    $checkpass= password_verify($pass,$passHash);

    if ($checkpass === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }else if($checkpass === true){
        session_start();
        $_SESSION["uid"] = $uidExist['acc_id'];
        $log_id = $_SESSION["uid"];
        $_SESSION["username"] = $uidExist['acc_Username'];
        
        $sqlcheck = "SELECT * FROM acc_information where acc_id='".$log_id."';";
        $res_check = mysqli_query($conn,$sqlcheck);
        $row1 = mysqli_fetch_assoc($res_check);
        
        if(mysqli_num_rows($res_check) < 1){
            echo mysqli_num_rows($res_check);
            header("location: ../verify.php");
            exit(); 
        }
        else{
            $_SESSION["lvl"] = $row1['acc_lvl'];
            $_SESSION["address"] = $row1['acc_address'];
            $_SESSION["contact"] = $row1['contact'];
            $_SESSION["facebook"] = $row1['facebook'];
            $_SESSION["twitter"] = $row1['twitter'];
            $_SESSION["github"] = $row1['github'];
            $_SESSION["google"] = $row1['google'];
            header("location: ../profile.php");
            exit();
        }
    }
}

