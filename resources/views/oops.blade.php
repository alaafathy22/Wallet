<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>OOPS</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/style_oops.css') }}" />
</head>

<body>
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>Oops!</h1>
            </div>
            <h2>404 - Page not found</h2>
            <p>Sorry You have <span style="color: red; font-weight: bold;">5</span> wallets you must to buy another one
            </p>
            <a href="sel_show?wallet={{ $wallet }}">Go To Homepage</a>
            <div class="my_text_wait">OR Wait <span>5</span> Second And Will Gonna Homepage Automatically</div>
        </div>
    </div>
    <?php return header('refresh:5;/sel_show?wallet=' . $_GET['wallet']); ?>
</body>

</html>
