<!doctype html>
<html>
    <head>
        <link href="lc_switch.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/lc_switch.min.js" type="text/javascript"></script>
    </head>
    <body>
        <form>
           <input type="checkbox" name="sample" value="1" />
        </form>

        <script type="text/javascript">
        $(document).ready(function(e) {
             $('input').lc_switch('show', 'hide').lcs_on();
//			 $('input').lcs_on();
        });
        </script>
    </body>
</html>