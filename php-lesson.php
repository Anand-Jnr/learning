<html>

<head>
    <title>Html Lessons</title>
    <style>
        h1 {
            text-align: center;
        }

        ul {
            list-style-type: none;
            overflow: auto;
            background-color: #333333;
        }

        li {
            /* float: left; */
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111111;
        }
    </style>
</head>
<body>
    <div id="left_side">
        <ul>

            <li><a href="PHP/home.php" target="iframe-html">Introduction</a></li></ul>
            <li><a href="PHP/syntax.php" target="iframe-html">Introduction</a></li></ul>
        </ul>
    </div>
    <div id="right_side">
        <iframe src="PHP/home.php" name="iframe-html"></iframe>
    </div>

</body>

</html>