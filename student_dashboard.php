
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <style type="text/css">
            body{
                margin: 0;
            }
            .container-fluid{
                padding: 0% 8%;
            }
            .container-fluid h1{
                color: #F4792C;
            }
            .nav-link{
                color: #00ccff;
            }
            .nav-link:hover{
                color: white;
                background-color: #00ccff;
            }
            footer{
                color: white;
                background-color: gray;
                padding: 2%;
            }
            .discribsion{
                height: auto;
            }
            .container{
                padding: 4% 1%;
            }
            .card{
                box-shadow: gray 4px 4px 40px;
            }
        </style>

    </script>
</head>
<body>


    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard.php"><img src="images/IST.png" width="35%" height="auto" alt="IST" /></a>
                <form class="d-flex">
                    <h1>Institute of Science and Technology</h1>
                </form>
            </div>    
        </nav>
        <nav>
            <ul class="nav nav-pills justify-content-evenly d-flex ">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Teacher</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Department</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#">Student Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Result</a>
              </li>
            </ul>
        </nav>
        
    </header>

    <section class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Teacher Login </h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Student Login</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
    </section>

    <footer class="d-flex  justify-content-center">
        <h6>This is IST property &copy; 2021 </h6>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
