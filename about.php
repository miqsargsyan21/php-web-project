<!DOCTYPE html>
<html>
<head>
	<title>My web</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
</head>
<body>
   <!-- ______________header___________ -->
    <div class="header">
      <?php  
        include("1)header.php");
      ?>
    </div>
   <!--____________________menu____________-->
   <div class="menu">
      <?php  
        include("2)menu.php");
      ?>
   </div>
   <!--__________________content4______________-->
   <div class="content4">
      <div class="div1">
        <h1>About me</h1>
        <img src="photos/about.jpg" width="250" class="img">
        <p class="p">Միքայել</p>
        <p class="p">Սարգսյան</p>
        <p class="p">Վալերիի</p>
      </div>
      <div>
        <p class="pp">Ես՝ Միքայել Վալերիի Սարգսյանս, ծնվել եմ Արցախի հանրապետության Մարտունու շրջանի Մարտունի քաղաքում 2000թ. հուլիսի 4-ին:2006թ.-ից հաճախել եմ Մարտունու թիվ 2 Մեսրոպ Մաշտոցի անվան 9-ամյա դպրոց:2014թ.-ին տեղափոխվել եմ Մարտունու թիվ 1 Նելսոն Ստեփանյանի անվան միջնակարգ դպրոց:2016թ.-ի հոկտեմբերից հաճախում եմ ԹՈՒՄՈ ստեղծարար տեխնոլոգիական կենտրոն:Ունեմ 2 քույր:Ընտանեկան կարգավիճակը՝ ամուստնացած չեմ(առայժմ):</p>
        <h1>Education</h1>
        <ul>
          <li>Artsakh State University</li>
          <li>Tumo Center for Creative Technologies</li>
        </ul>
      </div>
   </div>
   <!--________________footer_________________-->
   <div class="footer">
      <?php  
        include("3)footer.php");
      ?>
   </div>
</body>
</html>