<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>attr</title>
</head>

<body>
    <div>
        <em title="Bold and Brave">This is first paragraph.</em>
        <p id="myid">This is second paragraph.</p>
        <div id="divid"></div>
    </div>
    <div>
        <img id="myimg" src="../assets/img/img1.jpg" alt="Sample image" />
    </div>
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <script>
        //get attribute
        // $(document).ready(function() {
        //     let title = $("em").attr("title");
        //     $("#divid").html(title).css("color", "red"); 

        // });

        //set attribute
        // $(document).ready(function() {
        //     $("em").attr("title", "This is my title for set attribute");
        //     let title = $("em").attr("title");
        //     $("#divid").html(title).css("color", "blue");
        // });



        $(document).ready(function() {
            $("#myimg").attr("src", "../assets/img/img2.png");
        });

        //value set and get in em tag attribute title.
    </script>
</body>

</html>