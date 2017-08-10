<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>문화·예술·교육·전시의 차별화된 로봇 솔루션. 로보웍스!</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            // run the currently selected effect
            function runEffect() {
                // get effect type from
                var selectedEffect = $("#effectTypes").val();
                // Most effect types need no options passed by default
                var options = {};
                // some effects have required parameters
                // Run the effect
                $("#effect").show(selectedEffect, options, 300, callback);
            };
            //callback function to bring a hidden box back
            function callback() {
                setTimeout(function () {
                    $("#effect:visible").removeAttr("style").fadeOut();
                }, 3000);
            };
            // Set effect from select menu value
            $("#gnb").on("mouseover", function () {
                runEffect();
            });
            $("#effect").hide();
        });
    </script>
    <select name="effects" id="effectTypes" style="display: none">
        <option value="blind"></option>
    </select>
</head>
<?
include_once dirname(__FILE__)."/header.php";
?>