<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery</title>
</head>

<body>
    <div>
        <p class="myclass">This is a paragraph.</p>
        <p id="myid">This is second paragraph.</p>
        <p>This is third paragraph.</p>
    </div>
    <button id="showbtn">Show</button>
    <button id="hidebtn">Hide</button>
    <button id="togglebtn">Toggle</button>

    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {

            // var total = $(".myclass");
            // for (let index = 0; index < total.length; index++) {
            //     alert(total[index].innerHTML);

            // }
            $(".myclass").css("color", "blue").css("background-color", "yellow").css("font-size", "30px");
            $("div").css("border", "5px solid red");

            $("#showbtn").click(function() {
                $("div").show(500);
            });

            $("#hidebtn").click(function() {
                $("div").hide(500);
            });

            $("#togglebtn").click(function() {
                $("div").toggle(500);
            });


        })
    </script>
</body>

</html>