<!DOCTYYPE html>

<html>
<head>
    <title>Login page</title>
</head>

<div class="contact-title">
    <h1>Login</h1>
    <h2>Lets log in</h2>
</div>

<div class="contact-form">
<form id="contact-form" method="post" action="loginhamdler.php">

    <input name="name" type="text" class="form-control" placeholder="Your name here" required>
    <br>
    <input name="passsword" type="password" class="form-control" placeholder="password here" required>
    <br>
    <input type="submit" class="form-control submit" value="send">
</form>

</div>

<style>
    body{
        margin:0;
        padding: 0;
        text-align: center;
        background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(f.jpg);
        background-size: cover;
        background-position: center;
        font-family: sans-serif;

    }
    .contact-title{
        margin-top: 100px;
        color: #fff;
        text-transform: uppercase;
        transition: all 4s ease-in-out;
    }
    .contact-title h1{

        font-size: 32px;
        line-height: 10px;
    }
    .contact-title h2{

font-size: 16px;

}

form{
    margin-top: 50px;
    transition: all 4s ease-in-out;
}

.form-control{
width: 600px;
background: transparent;
border: none;
outline: none;
border-bottom: 1px solid gray;
color: #fff;
font-size: 18px;
margin-bottom: 16px;

}

input{

    height:45px;
}

form .submit{

    background:#ff5722;
    border-color: transparent;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 2px;
    height: 50px;
    margin-top: 20px;
}

form .submit:hover  {

background-color: #f44336;
cursor: pointer;
}
</style>
</html>