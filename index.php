<?php require_once './vendor/autoload.php'; ?>
<html>
    <?php require './src/header.php'; ?>

    <body>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#msgid").html("This is Hello World by JQuery");
            });
        </script>

            This is Hello World by HTML

        <div id="msgid">
        </div>
    </body>
</html>
