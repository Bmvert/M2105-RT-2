<?php
    function getHeader($startsession, $title) {
        if ($startsession) {
            session_start();
        }
         ?>
            <html>
                <head>
                    <meta charset='utf-8'>
                    <link rel='stylesheet' href='../css/bootstrap.css'>
                    <title> <?php echo($title)?> </title>
                </head>
                <body>
                <?php
    }

    function getFooter() {
            echo ("</body></html>");
    };
