
<!DOCTYPE html>
<html lang="en-CA">
<head>
    <meta charset="UTF-8">
    <title>form</title>
  <meta charset="UTF-8">
  <meta name="author" content="web page">
  <meta name="description" content="Jasmine Kaur">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
  <style>

 html{
   font-size:19px;
   scroll-behavior: smooth;}

 body {font-family: Arial, Helvetica, sans-serif;
       background-color:black;
       color: white;
      }
 * {box-sizing: border-box;}

 input{
   width: 50%;
   padding: 12px;
   border: 1px solid #ccc;
   border-radius: 4px;
   box-sizing: border-box;
   margin-top: 6px;
   margin-bottom: 16px;
   resize: vertical;
 }

 input[type=submit] {
   color: white;
   margin: auto;
   padding: 12px 20px;
   border: 2px outset grey;
   border-radius: 4px;
   cursor: pointer;
 }

 input[type=submit]:hover {
   background-color: #45a049;
 }


    .fa{ background-color:darkgray;
      color: white;
      position: center;
      border:1px solid black;
      border-radius:5px;
      padding:15px 20px;
      margin:10px 0;

    }
    .fa-twitter:hover,.fa-youtube:hover,.fa-instagram:hover,.fa-yahoo:hover
    {
      opacity: 0.6;
    }

    .fa-twitter{
      background: #55ACEE;
      color: white;

    }

    .fa-youtube{
      background: #bb0000;
      color: white;
    }
    .fa-instagram {
      background: #125688;
      color: white;

    }
    .fa-yahoo {
      background: #430297;
      color: white;

    }
    body {margin:0;}

    .icon-bar a {
      float:left;
      width: 15%;
      text-align: center;
      padding: 12px 0;
      transition: all 0.3s ease;
      color: black;
      font-size: 36px;
      position:center;
    }

    .icon-bar a:hover {
      background-color: white;
    }

    /* Style the video:width and height to cover the entire window */
    #myVideo {

      min-width: 5%;
      min-height:20%;

    }
  </style>
</head>
<body>
<h1>Register</h1>
<form action="profile.php" method="post" >
  <div class="form-group">
    <label for="name">USERNAME</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter username" maxlength="50" required>
  </div>
  <div class="form-group">
    <label for="pw">Password</label>
    <input type="password" class="form-control" id="pw" placeholder="enter password" minlength="8" maxlength="10" required>
  </div>
  <div class="form-group">
    <label for="userEmail">Email address</label>
    <input type="email" class="form-control" id="userEmail" aria-describedby="userEmail" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="age">age</label>
    <input type="date" class="form-control" id="age" placeholder="age" required>
  </div>
  <label for="Check" >GENDER</label>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="M" id="Check">
    <label class="form-check-label" for="Check">
      MALE
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="F" id="Check1">
    <label class="form-check-label" for="Check1">
      FEMALE
    </label> </div>
  <div>
    <button type="submit" class="btn btn-primary">Submit</button></div>

</form>
<nav class="fa">Also follow us on:
  <a href="https://twitter.com/?lang=en" class="fa fa-twitter"></a>
  <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
  <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
  contact us :
  <a href="https://in.yahoo.com/" class="fa fa-yahoo"></a><br>
</nav>
<footer>  <!-- The video -->
  <div><video autoplay muted loop id="myVideo">
    <source src="css/video.mp4" type="video/mp4">
  </video>
  </div>
  &copy;Copyright
</footer>
</body>
</html>