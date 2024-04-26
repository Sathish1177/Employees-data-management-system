<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee data storage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
     <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Employee</h1>
                  <div>
                    <a href="" class="btn btn-primary">Back</a>
                  </div>
        </header>
        <form action="process.php" method="post">
          <div class="form-element my-4">
              <input type="text" class="form-control" name="name" placeholder="Enter your Name">
          </div>

          <div class="form-element my-4">
              <input type="date" class="form-control" name="joining" placeholder="date of joining">
          </div>

          <div class="form-element my-4" >
              <select name="type"  class="form-control">
                 <option value="Trainee">Trainee</option>
                 <option value="Frontend  developer">Frontend developer</option>
                 <option value="Backend  developer">Backend developer</option>
                 <option value="Mobileapp  developer">Mobileapp developer</option>
                 <option value="Gameing  developer">Gameing developer</option>
                 <option value="Designer">Designer</option>
                 <option value="Digital Marketing">Digital marketing</option>
              </select>
          </div>

          <div class="form-element my-4">
              <input type="textarea" class="form-control" name="about" placeholder="tell about you...">
          </div>

          <div class="form-element my-4">
              <input type="file" class="form-control" name="resume" placeholder="uplode resume...">
          </div>

         <div class="form-element">
            <input type="submit" class="btn btn-success" name="create" value="add employee">
         </div>

        </form>
     </div>
</body>
</html>