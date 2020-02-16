<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Mulitiplication System</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Multiplication System with ajax and Php</h2>
        </div>
        <form action="" method="POST" id="myform">
            <input type="number" name="num" id="mynum">
        </form>
        <section id="output"></section>
    </div>

    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {
            $('body').on('change', '#mynum', function() {
                let value = $("#mynum").val();
                //                console.log(value);

                $.ajax({
                    type: "POST",
                    url: "logic.php",
                    data: {
                        value: value
                    },
                    success: (response) => {
                        //                        console.log(response);
                        $("#output").html(response);

                    }
                });
            });
        });

    </script>
</body>

</html>
