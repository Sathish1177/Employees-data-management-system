<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit employee details</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Employee Details</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM employee_data WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="name" placeholder="enter your name:" value="<?php echo $row["name"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="date" class="form-control" name="joining" placeholder="date of joining:" value="<?php echo $row["joining"]; ?>">
            </div>
            
            <div class="form-element my-4" >
              <select name="type"  class="form-control">
                 <option value="Trainee" <?php if($row["type"]=="Trainee"){echo "selected";} ?>>Trainee</option>
                 <option value="Frontend  developer" <?php if($row["type"]=="Frontend  developer"){echo "selected";} ?>>Frontend developer</option>
                 <option value="Backend  developer" <?php if($row["type"]=="Backend  developer"){echo "selected";} ?>>Backend developer</option>
                 <option value="Mobileapp  developer <?php if($row["type"]=="Mobileapp  developer"){echo "selected";} ?>">Mobileapp developer</option>
                 <option value="Gameing  developer" <?php if($row["type"]=="Gameing  developer"){echo "selected";} ?>>Gameing developer</option>
                 <option value="Designer" <?php if($row["type"]=="Designing"){echo "selected";} ?>>Design</option>
                 <option value="Digital Marketing" <?php if($row["type"]=="Digital Marketing"){echo "selected";} ?>>Digital marketing</option>
                 <option value="Digital Marketing" <?php if($row["type"]=="BPO"){echo "selected";} ?>>BPO</option>
              </select>
          </div>


           
          
            <div class="form-element my-4">
                <textarea name="about" id="" class="form-control" placeholder="about:"><?php echo $row["about"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Employee details" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Employee Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>