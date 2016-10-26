<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Homework 4</title>
        <link rel="stylesheet" href="./static/homework4.css">
        <link rel="stylesheet" href="./static/table.css">
    </head>

    <body>
        <div class="header">
            <h1 class="title">Week 4: Access Database through Web</h1>
            <h2 class="title">Online Questionare Remastered</h2>
        </div>
        <div class="left-bar">
            <p><a href="../index.html">Back to Homepage</a></p>
            <p><a href="./homework4-1.html">Questions</a></p>
            <p><a href="./homework4-2.html">Online Questionare Remastered</a></p>
        </div>
        <div class="main">
            <form action="/cgi-bin/delete.pl" method="post" id="dispform">
                <table id="mytable">
                    <tr>
                        <th>Select</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Email</th>
                    </tr>
                </table>
                <input type="submit" value="Delete Selected">
            </form>
        </div>
        <div class="footer">
            <p class="footer">Lei Yang, Fall 2016</p>
            <img src="./static/html.png" alt="HTML Validation" style="">
            <img src="./static/css2.png" alt="CSS Validation" style="">
        </div>
    </body>
</html>
        
