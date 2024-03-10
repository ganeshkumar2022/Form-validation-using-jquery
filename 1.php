<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<style>
.red
{
    color:red;
}
h1
{
    color:blue;
}
</style>
</head>
<body>
    <h1>Form validation using Jquery</h1>
    <form method="post" action="verify.php" id="regform" enctype="multipart/form-data" autocomplete="off">
        Name : <input type="text" name="name" id="name"><span class="red va_name"></span><br><br>
        Email : <input type="text" name="email" id="email"><span class="red va_email"></span><br><br>
        Myimage : <input type="file" name="myimage" id="myimage"><span class="red va_myimage"></span><br><br>
        password : <input type="password" name="password" id="password"><span class="red va_password"></span><br><br>
        confirm password : <input type="password" name="confirm_password" id="confirm_password"><span class="red va_confirm_password"></span><br><br>
        address : <textarea name="address" id="address" rows="5" cols="30"></textarea><span class="red va_address"></span><br><br>
        contact : <input type="number" name="contact" id="contact"><span class="red va_contact"></span><br><br>
        <input type="submit" name="submit" value="Register">
    </form>

<script>
    $(document).ready(function(){
        
        $("#regform").submit(function(e){
            e.preventDefault();

            var name=$("#name").val();
            var email=$("#email").val();
            var myimage=$("#myimage").val();
            var pass=$("#password").val();
            var confirm_password=$("#confirm_password").val();
            var address=$("#address").val();
            var contact=$("#contact").val();

            var valid=true;

            //name validation start
            var namepattern=/^[a-zA-Z][a-zA-Z0-9_]*$/;
            if(name.length==0)
            {
                $(".va_name").text("* Please fill name field");
                valid=false;
            }
            else if(name.length<5)
            {
                $(".va_name").text("* username must be atleast 5 characters");
                valid=false;
            }
            else if(!namepattern.test(name))
            {
                $(".va_name").text("* field name not valid.it starts with characters and contains alphabets,numerics and underscores");
                valid=false;
            }
            else
            {
                $(".va_name").text("");
            }
            
            //name validation end

            //email validation start
            var emailpattern=/^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if(email.length==0)
            {
                $(".va_email").text("* Please fill email field");
                valid=false;
            }
            else if(!emailpattern.test(email))
            {
                $(".va_email").text("* Please enter valid email");
                valid=false;
            }
            else
            {
                $(".va_email").text("");
            }

            //email validation end

            //myimage validation start
            if(myimage.length==0)
            {
                $(".va_myimage").text("* Please choose image file");
                valid=false;
            }
            else
            {
                $(".va_myimage").text("");
            }

            //myimage validation end

             //password validation start
            if(pass.length==0)
            {
                $(".va_password").text("* Please fill password field");
                valid=false;
            }
            else if(pass.length<6)
            {
                $(".va_password").text("* password must be atleast 6 characters");
                valid=false;
            }
            else
            {
                $(".va_password").text("");
            }
            
            //password validation end

             //confirm password validation start
             if(confirm_password.length==0)
            {
                $(".va_confirm_password").text("* Please fill confirm password field");
                valid=false;
            }
            else if(confirm_password!==pass)
            {
                $(".va_confirm_password").text("* password and confirm password not match");
                valid=false;
            }
            else
            {
                $(".va_confirm_password").text("");
            }
            
            //vconfirm password validation end

            //address validation start
            var addresspattern=/^[a-zA-Z0-9\s\.\/,#-]+$/;
            if(address.length==0)
            {
                $(".va_address").text("* Please fill address field");
                valid=false;
            }
            else if(!addresspattern.test(address))
            {
                $(".va_address").text("* Please enter valid address");
                valid=false;
            }
            else
            {
                $(".va_address").text("");
            }

            //address validation end

            //contact validation start
            var contactpattern=/^[6-9]\d{9}$/;
            if(contact.length==0)
            {
                $(".va_contact").text("* Please fill contact field");
                valid=false;
            }
            else if(!contactpattern.test(contact))
            {
                $(".va_contact").text("* Please enter valid contact no");
                valid=false;
            }
            else
            {
                $(".va_contact").text("");
            }

            //contact validation end

            if(valid)
            {
                $(this).unbind("submit").submit();
            }
        });
    });
</script>
</body>
</html>