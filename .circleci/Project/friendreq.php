<!DOCTYPE html>
<html lang="en-CA">
<head>
    <title>friend-request</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>
<h1>friend request</h1>
<ul class="w3-ul w3-card-4">
    <li class="w3-bar">
        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
        <img src="assets/img/avataaars1.svg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
        <div class="w3-bar-item">
            <span class="w3-large">Mike</span><br>
            <span>Web Designer</span>
        </div>
    </li>

    <li class="w3-bar">
        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
        <img src="assets/img/avataaars2.svg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
        <div class="w3-bar-item">
            <span class="w3-large">Jill</span><br>
            <span>Support</span>
        </div>
    </li>

    <li class="w3-bar">
        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
        <img src="assets/img/avataaars3.svg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
        <div class="w3-bar-item">
            <span class="w3-large">MANAV</span><br>
            <span>Artist</span>
        </div>
    <li class="w3-bar">
        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
        <img src="assets/img/avataaars.svg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
        <div class="w3-bar-item">
            <span class="w3-large">Jazz</span><br>
            <span>Musician</span>
        </div>
    <li class="w3-bar">
        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
        <img src="assets/img/avataaars1.svg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
        <div class="w3-bar-item">
            <span class="w3-large">SNEHA</span><br>
            <span>Dancer</span>
        </div>
    <li class="w3-bar">
        <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
        <img src="assets/img/avataaars2.svg" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
        <div class="w3-bar-item">
            <span class="w3-large">Janny</span><br>
            <span>Doctor</span>
        </div>
    </li>
</ul>
</body>
</html>