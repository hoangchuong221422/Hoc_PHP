<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nội dung A</h1>
    <div id="kh" style="border: 1px solid red; color: red; width: 200px; height: 200px;">...</div>
    <input id="txtmakh" type="text">
    <button id="btn">Lấy dữ liệu</button>


    <script src="./jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn").click(function(data){
                var MaKH = $("#txtmakh").val();
                $.get("td_5b.php",{MaKhoa:MaKH},function(data){
                    $("#kh").html(data);
                });     
                
            });
        });
    </script>
</body>
</html>