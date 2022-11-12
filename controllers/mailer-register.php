<?php
$msg = "";

if (isset($_SESSION['SESSION_EMAIL']))
{
    header("Location: welcome.php");
    die();
}

if (isset($_POST['submit']))
{
    // Name
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

    // Personal Information
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $ethnicity = mysqli_real_escape_string($conn, $_POST['ethnicity']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $religion = mysqli_real_escape_string($conn, $_POST['religion']);

    // School Information
    $yearlevel = mysqli_real_escape_string($conn, $_POST['yearlevel']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);

    // Address
    $province = mysqli_real_escape_string($conn, $_POST['province']);
    $municipality = mysqli_real_escape_string($conn, $_POST['municipality']);
    $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);

    // Password
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
    $code = mysqli_real_escape_string($conn, md5(rand()));

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0)
    {
        $msg = "<div>{$email} - This email address has been already exists.</div>";
    }
    else
    {
        if ($password === $confirm_password)
        {
            $sql = "INSERT INTO users (firstname, middlename, lastname, birthday,email,ethnicity,nationality,religion,yearlevel,course,department,province,municipality,barangay,street,password,code) 
            VALUES ('{$firstname}','{$middlename}','{$lastname}','{$birthday}','{$email}','{$ethnicity}','{$nationality}','{$religion}','{$yearlevel}','{$course}','{$department}','{$province}','{$municipality}','{$barangay}', '{$street}', '{$password}', '{$code}')";
            $result = mysqli_query($conn, $sql);

            if ($result)
            {
                $body = '<a href="http://localhost/system/?verification=' . $code . '">Click this link to verify</a>';
                require_once __DIR__ . './mailer.php';

                $msg = "<div>We've send a verification link on your email address.</div>";
                // header("Location: ./validate.php");

            }
            else
            {
                $msg = "<div>Something wrong went.</div>";
            }
        }
        else
        {
            $msg = "<div>Password do not match</div>";
        }
    }
}

