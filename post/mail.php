<?php
/*sprawdzenie wypełnienia wszystkich pól*/
}elseif(!empty($_POST['imienazwisko']) && !empty($_POST['email']) && !empty($_POST['trescwiadomosci'])){
/* Funkcja sprawdzająca poprawność E-Maila */
function SprawdzEmail($email) {
 if (!eregi("^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$" , $email)){
  return false;
 }
 return true;
}
if(SprawdzEmail($_POST['email'])){
/* Tworzymy szkielet wysyłanej wiadomości */
/*$adresemail='wybierznazwe.natalia@gmail.com'; /* Wpisz swój adres e-mail */
$adresemail='nataliaaaxd@wp.pl';
/* Wybierz kodowanie znaków usuwając // */
//$charset = 'iso-8859-2';
$charset = 'utf-8';
$wiadomosc="Od: $_POST[imienazwisko] ($_POST[email])\n\n$_POST[trescwiadomosci]";
$nadawca="From: $_POST[email]";
@mail($adresemail, "Formularz kontaktowy z www.NAZWA_SERWISU.pl", "$wiadomosc", "$nadawca");
echo "<span style=\"color: #00D800; font-weight: bold; \">Dziękujemy, formularz został wysłany.</span>";

?>