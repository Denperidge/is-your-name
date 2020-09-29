<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    #construction {
        z-index: 99;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("/media/img/construction.jpg");
        opacity: 1;


        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        

        font-size: 60px;
    }
    </style>
    <title>title</title>
</head>
<body>
    <div id="construction">
        This website is UNDER construction
    </div>

    <?php $name=strtolower(file_get_contents("name.txt"))?>

    <input type="text" id="name" required="true" placeholder="Enter your name here">
    <button id="checkResult">Is your name <?php echo ucwords($name) ?>?</button>

    <p id="result"></p>

    <audio id="yes" src="/media/audio/yes.mp3"></audio>
    <audio id="no" src="/media/audio/no.mp3"></audio>

    <script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous">
    </script>
    <script>
    <?php 
        foreach (array("yes", "no") as $variableName) {
            $variableValue = file_get_contents("$variableName.txt");


            echo "var $variableName = \"$variableValue\";\n";
        }
    ?>
    var construction = $("#construction");
    $(function() {
        construction.click(Reveal);
        $("#checkResult").click(CheckResult);
    });

    function Reveal() {
        var opacity = construction.css("opacity");
        if (opacity < 0.2) {
            construction.css("pointer-events", "none")
            construction.fadeTo("fast", 0);
            construction.off("click");
            return;
        }
        construction.fadeTo("fast", opacity - 0.1)
    }

    function CheckResult() {
        var text; var audio;
        if ($("#name").val().toLowerCase().trim() == "<?php echo trim($name); ?>") {
            text = yes;
            audio = "yes";
        }
        else { 
            text = no;
            audio = "no";
        }

        $("#result").text(text);
        $("#" + audio).trigger("play");
    }
    </script>
</body>
</html>