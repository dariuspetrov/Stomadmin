<?php require_once './vendor/autoload.php'; ?>
<html>
    <?php require './src/header.php'; ?>

    <body>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#msgid").html("Hello World!");
                $('#msgid').fadeIn('Slow');
            });
        </script>
        <div id="msgid">
        </div>
    </body>
</html>
