@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body >
    <div class="wrapper">
      <form  action="/admin" method="post" class="form-admin">
        @csrf
        <img id="logoadmin" src="/img/lemon1.png" alt="">
        <h2 class="form-admin-heading">Admin Login</h2>
        <input type="text" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
         <div class="downPart">
             @csrf
           <a  id="forgetPassowrd" href="#">Forget Password!</a>
           <br>
          <button class="submitbtn" type="submit">Login</button>

        </div>
      </form>
    </div>

  </body>
  <style media="screen">

  @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lobster&display=swap');


#loginbdy {
background: #edebeb !important;

}

.wrapper {
margin-top: 80px;
margin-bottom: 80px;
}

.form-admin {
max-width: 380px;
padding: 15px 35px 45px;
margin: 0 auto;
background-color: #eee;
border: 1px solid rgba(0,0,0,0.1);
border-radius: 5px 5px 5px 5px ;
font-family:  'Comfortaa', cursive;
text-align: center;
color: #333;
box-shadow: 0 0 20px 0px #f4f720;
}
#logoadmin{
  width: 70px;
  height: 70px ;

}

.form-admin-heading {
  margin-bottom: 30px;
  font-size: 28px;
}



.form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  box-sizing:border-box;
  font-family:  'Comfortaa', cursive;


}

input[type="text"] {
  margin-bottom: 10px;
  border-radius: 5px 5px 5px 5px ;
  border-radius: 5px 5px 5px 5px ;
  border-style: solid;
  border-width: 1px;
}

input[type="password"] {
  margin-bottom: 20px;
  border-radius: 5px 5px 5px 5px ;
  border-radius: 5px 5px 5px 5px ;
  border-style: solid;
  border-width: 1px;
}
input[type="password"] :hover ,input[type="text"]:hover {
  border-color: #f4f720;
}
.submitbtn{
    margin-bottom: 10px;
    margin-top: 10px;
    border: none ;
    border-radius: 5px 5px 5px 5px ;
    color: white ;
    background-color: #333;
    padding: 10px 10px 10px 10px ;
    width : 100px ;
    font-size: 24px;
}

.submitbtn:hover{
  background-color:#f4f720;
  cursor: pointer;
}


#forgetPassowrd{
  font-size: 14px ;
  color: #333;
}

  </style>
</html>

@endsection
