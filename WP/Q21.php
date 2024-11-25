<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <h1>Current time (at server) is : </h1>
            <h2 id="time"></h2>
        </div>
    </body>
    <?php
        echo "Current server time is: " . date("Y-m-d H:i:s", time());        
    ?>
</html>