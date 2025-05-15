<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html-text-val</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3">
            <h1 style="color:green" id="jhead">Jumbotron <em>Heading</em></h1>
            <p id="jcontant">Remember: <code>val()</code> is work with form and other use <code>html()</code> or <code>text()</code></p>
        </div>
        <hr>
        <form action="">
            <div class="form-group">
                <label for="">Heading:</label>
                <input type="text" class="form-control" id="heading">
            </div>
            <div class="form-group">
                <label for="">Contant:</label>
                <textarea class="form-control" id="contant"></textarea>
            </div>
            <div class="form-group">
                <input type="button" class="btn btn-primary" value="Set contant" id="setbtn">
                <input type="button" class="btn btn-primary" value="Get contant" id="getbtn">
            </div>
        </form>
    </div>

    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <script>
        //first work catch button and click korle work kore function. i want to catch two value input and textarea so id diye dorbo. val() diye form er value dorlam.
        $(document).ready(function() {
            //get value from to textarea to form
            $("#getbtn").click(function() {
                // let h = $("#jhead").text(); //return only text
                // let c = $("#jcontant").text();
                let h = $("#jhead").html(); //return with html code 
                let c = $("#jcontant").html();
                $("#heading").val(h);
                $("#contant").val(c);
            })

            // reverse text() and html()  get value from uper div.
            //set value in form to textarea
            $("#setbtn").click(function() {
                let h = $("#heading").val();
                let c = $("#contant").val();
                $("#jhead").html(h); // mane #jhead a value replace kore html() diye.
                $("#jcontant").html(c); // mane #jcontant a value replace kore html() diye.

                // $("#jhead").text(h); // text a html tag dile se chine na o text mone kore ata se browser k dey. parse korte pare na.
                // $("#jcontant").text(c);

                // reverse text() and html()  get value from uper div.

                //val() get and val(h) set. html() get and html(h) set . text() get and text(h) set


            });
        });
    </script>
</body>

</html>