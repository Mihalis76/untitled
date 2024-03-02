<?php

define("HOST", "localhost");
define("USER", "vesterso_user");
define("PASS", "ten_tego_tam");
define("BASE", "vesterso_stat");
$pdo;

function StartDatabase() {	
  global $pdo;
  $pdo = new PDO('mysql:host='.HOST.';dbname='.BASE.';charset=utf8',USER,PASS);  
  $pdo -> query ('SET NAMES utf8');
  $pdo -> query ('SET CHARACTER_SET utf8_polish_ci');  
  ini_set("display_errors",0);
  };
  
function IsEmail($email) {
  if (filter_var($email,FILTER_VALIDATE_EMAIL)) return true;
  return false;
  };
  
function GetNazwaRodzaj($rodzaj) {
  switch ($rodzaj) {
     case 1: return "Jednokrotnego wyboru";
     case 2: return "Wielokrotnego wyboru";
     case 3: return "Krzyżówki";
     case 4: return "Mini krzyżówki";
     case 5: return "Milionerzy";
     case 6: return "Gry";
     };
 };
  
function GetTesty() {
  global $pdo;
  $query='SELECT * FROM testy ';
  $query.='ORDER BY rodzaj,nazwa';
  return $pdo->query($query);
  };
  
function GetDownProg($id,$ip,$y,$m,$d) {
  global $pdo;
  $query='SELECT COUNT(IP) as Cnt FROM downprog ';
  $query.='WHERE (IDP=:id) AND (IP=:ip) AND (YEAR(Data)=:y) AND (MONTH(Data)=:m) AND (DAYOFMONTH(Data)=:d)';
  $wynik=$pdo->prepare($query);
  $wynik->bindValue(':id',$id,PDO::PARAM_INT);
  $wynik->bindValue(':ip',$ip,PDO::PARAM_STR);
  $wynik->bindValue(':y',$y,PDO::PARAM_INT);
  $wynik->bindValue(':m',$m,PDO::PARAM_INT);
  $wynik->bindValue(':d',$d,PDO::PARAM_INT);
  $wynik->execute();
  $res=$wynik->fetch();
  return $res['Cnt'];  
  };

function GetNazwaProgFull($index) {
 switch ($index) {
     case 1: return "Plan zajęć";
     case 2: return "Budżecik";
     case 3: return "Test - licencja dla szkół";
     case 4: return "Test - allegro";
     case 5: return "Ocena przedszkolaka";
	 case 6: return "Obsługa małej floty - wersja jednostanowiskowa";
	 case 7: return "Ocena gotowości szkolnej";
	 case 8: return "Kompleksowa obsługa poradni - wersja jednostanowiskowa";
	 case 9: return "Kompleksowa obsługa poradni - wersja sieciowa";
	 case 10: return "Obsługa małej floty - wersja sieciowa";
	 case 11: return "Kompleksowa obsługa poradni - rozbudowa do wersji sieciowej";
	 case 12: return "Obsługa małej floty - rozbudowa do wersji sieciowej";
	 case 13: return "Test - licencja dla osób prywatnych";
     };
 };
 
function SetLiczba($liczba) {
  $c=floor($liczba);
  $d=$liczba-$c;
  if ($d<10) $ds='0'.$d;
  else $ds=$d;
  $sl=$c.'.'.$ds;
  return $sl;
};

function GetCenaProg($index) {
 switch ($index) {
     case 1: return 190.00;     
     case 3: return 200.00;
     case 5: return 164.00;
	 case 6: return 270.00;
	 case 7: return 149.00;
	 case 8: return 690.00;
	 case 9: return 1200.00;
	 case 10: return 350.00;
	 case 11: return 510.00;
	 case 12: return 80.00;
	 case 13: return 60.00;
     };
 };
 
function GetCenaDostawa($index) {
 switch ($index) {
     case 0: return 7.00;
     case 1: return 15.00;
     case 2: return 7.00;
     case 3: return 0.00;
     case 4: return 0.00;
     };
 };

function AddDownTest($id) {
  global $pdo;
  $query='UPDATE testy ';
  $query.='SET IlPob=IlPob+1 ';
  $query.='WHERE (ID=:id)';
  $wynik=$pdo->prepare($query);
  $wynik->bindValue(':id',$id,PDO::PARAM_INT);
  $wynik->execute();
  };
  
function AddDownProg($id) {
  global $pdo;
  $query='UPDATE download ';
  $query.='SET IlPob=IlPob+1 ';
  $query.='WHERE (ID=:id)';
  $wynik=$pdo->prepare($query);
  $wynik->bindValue(':id',$id,PDO::PARAM_INT);
  $wynik->execute();
  };
 
function AddDownProgIP($id,$IP,$koment) {
  global $pdo;
  $query='INSERT INTO downprog (IP,IDP,Data,Koment) ';
  $query.='VALUES (:ip,:id,NOW(),:koment)';
  $wynik=$pdo->prepare($query);
  $wynik->bindValue(':ip',$IP,PDO::PARAM_STR);
  $wynik->bindValue(':id',$id,PDO::PARAM_INT);
  $wynik->bindValue(':koment',$koment,PDO::PARAM_STR);
  $wynik->execute();
  };

?>