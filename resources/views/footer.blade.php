<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  

    <title></title>
  </head>
  <body>
    <!------------------------FOOTER -------------------------------------------------- -->
<br>

<div class="footer-basic">
  <footer>
    <div class="footer-logo">
     <a class="footer-webiste-name" style="font-size: 50px;font-family: 'Lobster', cursive;color: yellow;">  <img id="footer-logo-img" src="/img/lemon1.png" alt="Lyamonah logo footer "  >
      Laymuna</a>
    </div>
    <ul class="list-inline">
      <li class="list-inline-item"> <a style="text-decoration: none;" class="list-inline-links" href="/">Home</a></li>
      <li class="list-inline-item"> <a style="text-decoration: none;" class="list-inline-links"href="#">Men</a></li>
      <li class="list-inline-item"> <a style="text-decoration: none;" class="list-inline-links"href="#">Women</a></li>
      <li class="list-inline-item"> <a style="text-decoration: none;" class="list-inline-links"href="#">Kids</a></li>
      <li class="list-inline-item"> <a style="text-decoration: none;" class="list-inline-links"href="/contact">Contact</a></li>
      <li class="list-inline-item"> <a style="text-decoration: none;" class="list-inline-links"href="privacy">Privacy Policy</a></li>
      <?php if (Session::has('admin')): ?>
        <li class="list-inline-item"><a style="text-decoration: none;" class="list-inline-links" href="adminpanel"> Admin Panel </a></li>

      <?php else: ?>
        <li class="list-inline-item"><a style="text-decoration: none;" class="list-inline-links"href="/admin">Admin Login</a></li>
      <?php endif; ?>
    </ul>
    <div class="social">
      <a href="#"><img src="/img/fbyellow.png" alt="fbyellow" style="width:60px;height:60px;margin-right: 30px;"></a>
      <a href="#"><img src="/img/instayellow.png" alt="instayellow" style="width:60px;height:60px;"></a>
    </div>
    <p class="copyright">Laymuna &copy; 2022 </p>
  </footer>

</div>
  </body>
  <style media="screen">
  .footer-basic{
background-color: #333;
text-align: center ;
position: relative;
font-family: 'Lobster', cursive;
margin-bottom: 0;
}
.footer-logo{
margin-bottom: 20px;
}
#footer-logo-img{
width: 70px;
height: 70px;
}
.footer-webiste-name{
font-size: 50px;
font-family: 'Lobster', cursive;
color: yellow;
}
.social{
margin-bottom: 20px;
}
.list-inline{
list-style-type: none ;
margin-bottom: 20px;
}
.list-inline-item{
display: inline;
font-size: 25px ;
}
.list-inline-links{
color: white;
font-family:  'Comfortaa', cursive;
padding: 15px 15px;
}
.copyright{
color: white ;
padding-bottom: 10px;
font-family:  'Comfortaa', cursive;
font-size: 18px;
font-weight: bold ;
}

  </style>
</html>
