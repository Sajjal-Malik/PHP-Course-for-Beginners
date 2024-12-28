<?php

// ******************* This is for the General Hashing and Undersstanding the Process ******************

// $sensitiveData = "Malik";
// $salt = bin2hex(random_bytes(16));  // Generate random salt
// $pepper = "ASecretPepperString";

// $dataToHash = $sensitiveData . $salt . $pepper;
// $hash = hash("sha256", $dataToHash);

// // echo "<br>" . $hash;
// $storedHash = $hash;

// $sensitiveData = "Malik";
// $storedSalt = $salt;
// $pepper = "ASecretPepperString";

// $dataToHash = $sensitiveData . $salt . $pepper;
// $verificationHash = hash("sha256", $dataToHash);


// if ($storedHash == $verificationHash){
//     echo "Data is same";
//     echo "<br>";
//     echo $storedHash;
//     echo "<br>";
//     echo $verificationHash;

// }
// else{
//     echo "Data is not same";
// }



// ****************** Database Password Hashing (using PHP's built in Function) ****************


$pwd = "Malik";   // inplace of this string we include our database password here

$options = [
    'cost' => 12,
];

$hashedPassword = password_hash($pwd, PASSWORD_DEFAULT, $options);

$pwdLogin = "Malik";   // using this password for verification

if(password_verify($pwdLogin, $hashedPassword)){
    echo "They are same";
}
else{
    echo "They are not same";
}


 ?>