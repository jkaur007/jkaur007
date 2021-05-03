<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body, html {
            height: 100%;
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .bg-img {
            /* The image used */
            background-image: url("assets/img/p4.jpg");

            min-height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        /* Add styles to the form container */
        .container {
            position: absolute;
            right: 0;
            margin: 20px;
            max-width: 300px;
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text], input[type=password], select, textare{
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit button */
        .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }
    </style>
</head>
<body>

<h2>CONTACT US </h2>
<div class="bg-img">
    <form action="index.html" class="container">
        <h1>FILL INFORMATION BELOW:</h1>

        <label for="email"><b>NAME</b></label>
        <input type="text" placeholder="Enter Email" name="name" id="name" required>

        <label for="name"><b>EMAIL</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="country">Country</label>
        <select id="country" name="country">
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select><br>

        <label for="subject">COMMENT</label><br>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        <button type="submit" class="btn">SEND</button>
    </form>
</div>
</body>
</html>
