<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selector</title>
</head>
<body>
<ul>
    <li> some list item is here</li>
    <li> some list item is here</li>
    <li class="myclass"> some list item is here</li>
    <li class="myclass"> some list item is here</li>
    <li> some list item is here</li>
</ul>

<script src="../assets/js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function () {
        $("li:not(.myclass)").css("color", "red");  //not .myclass other apply
        $("ul li:first").css("font-size", "36px").css("color", "blue").css("background-color", "yellow");
        $("ul li:last").css("font-size", "36px" ).css("color", "orange").css("background-color", "black"); 
    });
</script>
</body>
</html>