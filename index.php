<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read JSON Data</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="main">
        <div id="header">
            <h1>php with ajax & json</h1>
        </div>
        <div id="load-data">
            <table id="load-table" border="1" cellpadding="10px" width="100%">
                <tr>
                    <th>id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                </tr>
            </table>
        </div>
    </div>
    <script>
     $(document).ready(function(){
        $.ajax({
            url: "fetch-json.php",
            type: "POST",
            data: {id: 3},
            dataType: "JSON",  // php file which type of data return then we can use dataTpe
            success: function(data){
                $.each(data, function(key,value){
                    $("#load-table").append("<tr><td>" + value.id + "</td><td>" + value.first_name + "</td><td>" + value.last_name + "</td></tr>");
                })
                // console.log(data);
            }
        });

        // $.getJSON(
        //     "fetch-json.php",
        //     function(data){
        //         $.each(data, function(key,value){
        //             $("#load-data").append(value.id + " " + value.first_name + " " + value.last_name);
        //         })
        //         // console.log(data);
        //     }
        // )
    });
    </script>
</body>
</html>