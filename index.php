<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <style>
.button {
  background-color: #007bff;
  border: none;
  color: white;
  /* padding: 15px 32px; */
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
    <!-- <style>
        [class*="col"] {
            /* padding: 1rem; */
            background-color: #88c7e7;
            /* border: 2px solid #fff; */
            color: rgb(0, 0, 0);
        }
    </style> -->

</head>
<body>

    <div class="m-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">RIS</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse1">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarCollapse1">
                    <div class="navbar-nav">
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">About</a>
                        <!-- <a href="#" class="nav-item nav-link">Products</a> -->
                    </div>
                    <form class="d-flex ms-auto">
                        <input type="text" class="form-control me-sm-2" placeholder="Search">
                        <button type="submit" class="btn btn-outline-light">Search</button>
                    </form>
                </div>
            </div>
        </nav>

    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-6 col-sm-6 col-lg-6">
                <h1>life is short and<br>the world is wide!!!</h1>
                <p>To get the best of your adventure you just need to leave and go whereever you like. we are waiting for you.</p>
                <a href="# " class="btn btn-primary stretched-link ">try for free</a>

            </div>
            <!-- <div class="col-md-6 col-sm-6 col-lm-6-100 text-right" style=" height:500px"> -->
            <div class="col-md-6 col-sm-6 col-lm-6-100 text-right">
                <img src="https://t4.ftcdn.net/jpg/01/30/91/95/360_F_130919570_wpNIkKeg6FujLOcWrAMF2UVoNhMb6i6t.jpg" class="image-responsive " width="50%" />

            </div>
        </div>
    </div>


    <form action="insert.php" method="POST">

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone" required>
  </div>
  <div class="form-group">
    <label for="fromm">Fromm</label>
    <input type="text" class="form-control" id="fromm" name="fromm" required>
  </div>
  <div class="form-group">
    <label for="too">To</label>
    <input type="text" class="form-control" id="too" name="too" required>
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date" name="date" required>
  </div>
  <div class="form-group">
    <label for="num_ticket">Number of Tickets</label>
    <input type="num_ticket" class="form-control" id="num_ticket" name="num_ticket" required>
  </div>
  <button type="submit" name="btnSubmit">Book Ticket</button>
</form>



            <div class="row">
                <div class="col-md-4 col-sd-4 col-lg-4">
                    <div style="text-align: center;">
                        <img src="https://cdn-icons-png.flaticon.com/512/814/814513.png" class="image-responsive" width="30px" height="30px" />
                    </div>
                </div>
                <div class="col-md-4 col-sd-4 col-lg-4">
                    <div style="text-align: center;">
                        <img src="https://cdn-icons-png.flaticon.com/128/9658/9658417.png" class="image-responsive" width="30px" height="30px" />
                    </div>

                </div>
                <div class="col-md-4 col-sd-4 col-lg-4">
                    <div style="text-align: center;">
                        <img src="https://t4.ftcdn.net/jpg/00/99/92/53/240_F_99925328_JQwYlQPCxiGNnUnAGgAqyXmr4veEbYil.jpg" class="image-responsive" width="30px" height="30px" />
                    </div>
                </div>
            </div>
<div class="button">
            <div class="row"></div>
<div class="col-md-12 col-sd-12 col-lg-12">
<button>
<a href="rev.php">see available seats</a>
</button>
</div>
      </div>

            <div class="row">
                <div class="col-md-4 col-sd-4 col-lg-4">
                    <div style="text-align: center;">
                        <p>Explore the best ride <br>deals from anywhere, to everywhere,<br> then book with no fees</p>
                    </div>
                </div>
                <div class="col-md-4 col-sd-4 col-lg-4">
                    <div style="text-align: center;">
                        <p>Compare deals from over <br>1000 providers, and choose the cheapest ,<br> fastest or greenest tickets.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sd-4 col-lg-4">
                    <div style="text-align: center;">

                        <p>Find the cheapest month <br> or even day - to ride <br>and set up Price Alerts to book when the price is right
                        </p>
                    </div>
                </div>
            </div>


            <div class="row"></div>

            </div>




            

            
</body>

</html>
