<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resetpassword</title>
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <section class="inner-pages signup">
        <div class="custom-form">
            <div class="submit"><button type="button" class="log-submit-btn"><span>Đăng ký</span></button></div>
        </div>
    </section>

    <script src="frontend/js/jquery-3.5.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="admin_asset/js/validate.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            const alert = document.getElementById('alert');
            $("input#sendcapchar").click(function(){
                alert.replaceChildren();
                alert.innerHTML += 'Hệ thống đang xử lý. Vui lòng đợi ...';
                var email = $(this).parents('#validateForm').find('input[name="email"]').val();
                var note = $(this).parents('#validateForm').find('input[name="note"]').val();
                
                $.ajax({
                    url:  'sendcapchar/'+email, type: 'GET', cache: false, 
                    data: {
                        "email":email,
                        "note":note,
                    },
                    success: function(data){
                        $('#alert').html(data);
                    }
                });
            });
        }); 
    </script>

</body>
</html>

