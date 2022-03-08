<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coding</title>
  <style>
      *{

          background-color: #224957;
      }
      /* input[type=text]{

          background-color: #224957;
      } */

 
      img{
          margin-left: 290px;
          margin-top: 40px;
      }p{
          margin-left: 300px;
          margin-top: 40px;
      }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body><center>
<div class="contener-fluid mx-5 mt-3">
    <div class="row mx-5">
        <div class="col-sm-8 mx-5" >
           
        <img src="logo.png" height="80px;">
            <p class="text-white mt-2 text-center "><big>Create your account it's free and only takes a minute</big></p>

   
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <center>
        <form action="insert.php " method="post">
            <div class="col-sm-6 mt-2">
                <div class="col-sm-3"></div>
                <input type="text" name="first" id="" placeholder="First Name" class="form-control mt-3">
                <input type="text" name="last" id="" placeholder="Last Name" class="form-control mt-3">

            </div>
            <div class="col-sm-6">
            <input type="email" name="email" id="" placeholder="Email" class="form-control mt-3">
            <input type="password" name="pass" id="" placeholder="Password" class="form-control mt-3">
            <input type="password" name="cpass" id="" placeholder="Confirm Password" class="form-control mt-3">

            <input type="checkbox" name="check" id="" value="click" class="mt-3 text-center text-white"> <b class="text-white"">I accept the <a>Terms of use</a> & <a>Privacy Policy</a>
<br>
            <input type="submit" value="Register Now" class="form-control mt-3" name="submit" style="background-color:#20df7f;border-radius: 10px;">
            </div>

        </div>
    </div>
</div>
</form>
        </div>
    </div>
</div>
</center>
</form>
</body>
</html>