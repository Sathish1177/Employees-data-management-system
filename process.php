<?php
include('connect.php');
if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $joining = mysqli_real_escape_string($conn, $_POST["joining"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $about = mysqli_real_escape_string($conn, $_POST["about"]);

    // Handle file upload
    $resume_path = 'uploads/' . $_FILES['resume']['name'];
    move_uploaded_file($_FILES['resume']['tmp_name'], $resume_path);

    // Insert data into database
    $sql = "INSERT INTO employee_data (name, joining, type, about, resume) 
            VALUES ('$name', '$joining', '$type', '$about', '$resume_path')";
    
    if(mysqli_query($conn, $sql)) {
        // Set success message and redirect
        session_start();
        $_SESSION["create"] = "Employee Added Successfully!";
        header("Location: index.php");
        exit();
    } else {
        // Handle database errors
        die("Something went wrong: " . mysqli_error($conn));
    }
}





















if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $joining = mysqli_real_escape_string($conn, $_POST["joining"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $about = mysqli_real_escape_string($conn, $_POST["about"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE employee_data SET name = '$name', joining = '$joining', type = '$type', about = '$about' WHERE id='$id'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Employee detail Updated Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}?>