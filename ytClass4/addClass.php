<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addclass</title>
    <style>
        .red {
            color: red;
            background-color: brown;
        }

        .green {
            color: green;
            background-color: yellow;
        }
    </style>
</head>

<body>
    <div id="firstDiv">First div is here</div>
    <div id="secondDiv">Second div is here</div>
    <hr>
    <ul>
        <li>
            <div>first div</div>
        </li>
        <li>
            <div>second div</div>
        </li>
        <li>
            <div>third div</div>
        </li>
        <li>
            <div> fourth div</div>
        </li>
        <li>
            <div> fifth div</div>
        </li>
    </ul>


    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {

            // $("#firstDiv").addClass("green");
            $("#firstDiv").removeClass("green");
            $("#secondDiv").addClass("red");
            $("div").click(function() {
                // $(this).addClass("red");
                $(this).toggleClass("red");
                if($(this).hasClass("red")) {
                    alert("red class is there");
                }

            });

        });
    </script>
</body>

</html>