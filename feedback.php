<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        .container {
            background-color: slategrey;
            padding: 10px;
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            width: 60%;
        }
        input {
            width: 100%;
            height: 30px;
            font-size: 15px;
        }
        textarea {
            width: 100%;
            height: 50px;
            font-size: 15px;
        }
        button {
            cursor: pointer;
            margin: 5px 10px;
            border-radius: 5px;
        }
        #reset {
            background-color: whitesmoke;
            border: 1px solid whitesmoke;
            font-size: 15px;
        }
        #submit {
            background-color: rgb(23, 134, 23);
            border: 1px solid rgb(23, 134, 23);
            color: white;
            font-size: 16px;
        }
        h1, h3 {
            color: rgb(230, 225, 225);
        }
        @media screen and (max-width:800px){
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <form name="form" action="feedback1.php" method="POST" autocomplete="off">
            <h1>Feedback Form</h1>
            <h3>Give your Feedback for improve our service...</h3>
            <div style="display: flex;">
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            </div><br>
            <div style="display: flex;">
            <textarea name="comment" id="comment" placeholder="Enter your comment..." required></textarea>
            </div><br><br>
            <button type="reset" value="Reset" name="reset" id="reset">Reset</button>
            <button type="submit" value="Submit" name="save" id="submit">Submit</button>
        </form>   
    </div>
</body>
</html>