<!DOCTYPE html>
<html lang="en-CA">
<head>
    <title>MASSAGE PAGE</title>
<style>
    body {
        font-size: 20px;
    }
    .topnav input[type=text] {
        float: right;
        padding: 6px;
        border: none;
        margin-top: 8px;
        margin-right: 16px;
        font-size: 17px;
    }
    @media screen and (max-width: 600px) {
        .topnav input[type=text] {
            float: none
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
        }
        .topnav input[type=text] {
            border: 1px solid #ccc;
        }
    }

</style>
</head>
<body>
<p>Search your friend you want to send massage</p>
<input type="text" placeholder="search">
<br>
<div><hr> want to send wink
    <button class="w3-button " title="send wink" style='font-size:30px;' href="#" > send &#128521;</button>
</div>
<br>
<hr>
<label for="massage"></label> Type your massage<br>

<textarea  name="massage" rows="10" cols="50"></textarea>
<br>
<input type="submit" value="Submit">
<hr>
</body>
</html>
