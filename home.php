<?php
    include_once "a.php";
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>
                Homepage
            </title>
        </head>
        <body>
            <div id="header"></div>



            <div id="footer"></div>
        </body>
        <script>
        $(function(){
    $("#header").load("includes/navigation.html"); 
    $("#footer").load("includes/footer.html");
    }); 
    </script>   


    </html>
</!DOCTYPE>