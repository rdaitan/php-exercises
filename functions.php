<html>
    <head>
        <title>Functions</title>
    </head>
    <body>
        <h1>functions</h1>
        <?php function column() { ?>
            <td>column</td>
        <?php } ?>
        <?php
            for ($i = 0; $i < 10 ; $i++)
                column();
        ?>
    </body>
</html>