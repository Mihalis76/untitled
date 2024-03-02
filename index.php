<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="pl">
<head><!--//https://pixabay.com/pl/photos/komputer-klawiatura-wpisuj%C4%85c-1869236/-->
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-703CZT9YM8"></script>
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'G-703CZT9YM8');
   </script>
   <title>Programy na zamówienie, bazy danych, strony internetowe VESTERSOFT</title>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">   
   <link rel=stylesheet href="stylv.css" type="text/css">
   <meta name="description" content="Tworzymy: programy komputerowe, bazy danych, aplikacje oraz strony i sklepy internetowe na indywidualne zamówienie.">   
   <meta name="keywords" content="programy na zamówienie, programista, programiści, menadżer pojazdów, plan zajęć, poradnia psychologiczno - pedagogiczna, flota samochodowa, program do obsługi floty samochodowej, program do obsługi poradni psychologiczno - pedagogicznej, bazy danych, strony internetowe, sklep internetowy">
   <meta name="robots" content="index,follow">
   <meta NAME="author" content="Vestersoft">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="canonical" href="https://vestersoft.pl">
   <link rel="shortcut icon" type="image/ico" href="images/logov.ico">
</head>
<body>
<div id="container">
  <header>
    <picture>
	   <source srcset="images/header3.webp" type="image/webp">
	   <source srcset="images/header3.jpg" type="image/jpg">
	   <img src="images/header3.jpg" width=1050 alt="header">
    </picture>
  </header>
  <aside>
    <nav>
	  <ul>
	    <li><a href="index.php">O nas</a></li>
		<li><a href="uslugi.php">Usługi</a></li>
		<li><a href="programy.php">Sklep</a></li>
		<li><a href="klienci.php">Klienci</a></li>
		<li><a href="kontakt.php">Kontakt</a></li>
	  </ul>
	</nav><br>
	<div class="srodek">
	  <img src="ciw/site_dev_assoc.jpg" alt="Certified Internet Webmaster Site Development Associate" 
	       title="Site Development Associate" width=125 height=111>
	</div>
	<div class="srodek">
	  <a href="index.php" onmouseover="document.getElementById('langpl').src='images/flagapl.jpg'" 
	     onmouseout="document.getElementById('langpl').src='images/flagaplblack.jpg'">
	     <img id="langpl" src="images/flagaplblack.jpg" alt="Polska wersja" title="Polski" width=60 height=30></a>&nbsp;
      <a href="indexeng.php" onmouseover="document.getElementById('langgb').src='images/flagagb.jpg'" 
	     onmouseout="document.getElementById('langgb').src='images/flagagbblack.jpg'">
		 <img id="langgb" src="images/flagagbblack.jpg" alt="English Version" title="English" width=60 height=30></a>
    </div>
  </aside>
  <section id="main">
    <h1>O nas</h1>
	<p class="srodek">Tworzymy programy komputerowe na zamówienie, strony internetowe oraz bazy danych. Nasza oferta 
	skierowana jest przede wszystkim do firm i instytucji poszukujących specjalistycznego oprogramowania, 
	które usprawni funkcjonowanie oraz pozwoli zwiększyć dochody firmy. Naszym klientom zapewniamy okres 
	gwarancji oraz serwis naszych produktów.<br><br>
    W swojej ofercie posiadamy gotowe programy dla szkół, poradni psychologiczno - pedagogicznych, instytucji edukacyjnych a także
	program do obsługi floty samochodowej. Wszystkie programy można zamówić w naszym sklepie. 
	Wykonujemy także wersje dedykowane tych programów.<br><br>
    Oferujemy niskie ceny i szybkie terminy. Analiza zlecenia oraz wycena są bezpłatne i niezobowiązujące, 
	płatność następuje po wykonaniu zlecenia.</p>
    <h2 class="nowosc">Programy dla szkół, przedszkoli i poradni psychologiczno - pedagogicznych</h2>
	<div class="srodek">
       <a href="plan.php">
          <picture>
	         <source srcset="images/program-plan-zajec.webp" type="image/webp">
	         <source srcset="images/program-plan-zajec.jpg" type="image/jpg">
	         <img class="noborder" src="images/program-plan-zajec.jpg" alt="Program wspomagający układanie planu zajęć" title="Plan zajęć" width=95 height=95>
          </picture>
          </a>&nbsp;
       <a href="test.php"><img class="noborder" src="images/program-ukladanie-rozwiazywanie-testow.jpg" alt="Program do układania i rozwiązywania testów" title="Test"
   	      width=95 height=95></a>&nbsp;
       <a href="przedsz.php"><img class="noborder" src="images/przedszm.jpg" alt="Program dokumentujący rozwój przedszkolaka" title="Ocena przedszkolaka" 
	      width=95 height=95></a>&nbsp;
       <a HREF="gotszk.php"><img class="noborder" src="images/o_gotm1.jpg" alt="Program do obserwacji rozwoju dziecka" title="Ocena gotowości szkolnej" 
  	      width=95 height=95></a>
       <a HREF="poradnia.php"><img class="noborder" src="images/program-dla-poradni.jpg" alt="Program dla poradni psychologiczno - pedagogicznej" 
	      title="Poradnia psychologiczno - pedagogiczna" width=95 height=95></a>
       <h2 class="nowosc">Program do administrowania pojazdami</h2>
       <a HREF="omf.php">
          <picture>
	         <source srcset="images/program-do-obslugi-floty-samochodowej.webp" type="image/webp">
	         <source srcset="images/program-do-obslugi-floty-samochodowej.jpg" type="image/jpg">
	         <img class="noborder" src="images/program-do-obslugi-floty-samochodowej.jpg" alt="Program do obsługi floty samochodowej" title="Obsługa małej floty" width=200 height=200>
          </picture>
	      </a>
	</div>
  </section>
  <footer>
    <p>&copy;VESTERSOFT 2004-<?php echo date("Y"); ?></p>
  </footer>
</div>
<?php
//if (!isset($_COOKIE['VestersoftCookie2'])) {
if (!isset($_SESSION['VestersoftCookie2'])) {	
  print'<div class="cookieInfo">';
  print'<p>Informujemy, iż w celu zapewnienia jak najlepszej wygody w przeglądaniu naszej strony internetowej, dostosowania jej do indywidualnych ';
  print'preferencji użytkownika a także dla uwierzytelniania podczas zakupów w sklepie internetowym korzystamy z informacji zapisanych za pomocą ';
  print'plików cookies na urządzeniach końcowych użytkownika. Plikami cookie użytkownik może zarządzać za pomocą zmiany ustawień swojej przeglądarki ';
  print'internetowej.</p>';
  print'<p>Dalsze korzystanie z naszego serwisu bez zmiany ustawień dotyczących cookies oznacza, że użytkownik akceptuje politykę stosowania plików cookies, ';
  print'która szczegółowo jest opisana w naszej <a href="polityka2023.php" target="_blank">Polityce Prywatności</a></p>';
  print'<a href="cookie.php" class="cookieAccept">Akceptuję</a>';
  print'</div>';
  }
?>

<!-- start gg-chat-html - Copyright Fintecom Sp. z o.o. -->
<a href="//widget.gg.pl/widget/93e71d7ca1f3962cfa9fa7b8e1ba8be633369efe23e7e55f8fdc6015199b3612#uin%3D73509795%7Cmsg_online%3DWitam%2C%20w%20czym%20mog%C4%99%20pom%C3%B3c%7Cmsg_offline%3DZostaw%20wiadomo%C5%9B%C4%87%20i%20informacje%20kontaktowe%2C%20a%20odpowiemy%20na%20Twoje%20pytanie.%7Chash%3D93e71d7ca1f3962cfa9fa7b8e1ba8be633369efe23e7e55f8fdc6015199b3612" rel="nofollow" data-gg-widget="snapped-bottom" target="_blank" style="display: inline-block; max-width: 201px; height: 34px; box-sizing: border-box; overflow: hidden; font-size: 12px; font-family: Arial, sans-serif; font-weight: normal; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: antialiased; font-smoothing: antialiased; -webkit-border-radius: 17px; -moz-border-radius: 17px; border-radius: 17px; box-shadow: 0 1pt 12pt rgba(0,0,0,.3); -webkit-box-shadow: 0 1pt 12pt rgba(0,0,0,.3); -moz-box-shadow: 0 1pt 12pt rgba(0,0,0,.3); user-select: none;">
  <span style="float: right; max-width: 148px; height: 34px; padding: 0 15px 0 21px; margin-left: -16px; box-sizing: border-box; line-height: 34px; background-color: #1c1c1c; border-radius: 0 17px 17px 0; color: #fff; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Zadaj pytanie on-line</span>
  <span style="display: flex; justify-content: center; align-items: center; float: left; width: 34px; height: 34px; box-sizing: border-box; background-color: #fff; border-radius: 50%"><img alt="" style="display: block; width: 20px; height: 20px;" src="https://status.gadu-gadu.pl/users/status.asp?id=73509795&amp;styl=4&amp;source=widget"></span>
</a><!-- Chcesz mieć GG Chat na swojej stronie? Sprawdź https://www.ggchat.com/ -->
<!-- end gg-chat-html -->

<!-- start gg-chat-javascript - kod javascript możesz umieścić przed końcowym znacznikiem body - Copyright Fintecom Sp. z o.o. -->
<script>
(function() {
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.id = 'gg-widget-script';
    s.src = '//widget.gg.pl/resources/js/widget.js';
    var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss); })();
</script>
<!-- end gg-chat-javascript -->

<!--lexlab-->
<!--<script src="https://swiadectwa.legalniewsieci.pl/themes/default/assets/js-v2/initwidget.min.js"></script>
<script>
	var params  = {
		"id": "LWS-245d18df306f6533182c579ea2307247",
		"type" : "1"
	};
	initWidget(params);
</script>-->

</body>
</html>