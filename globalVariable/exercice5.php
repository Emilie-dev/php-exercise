<?php 

setcookie('login', 'tralala', time() + 365*24*3600, null, null, false, true);
setcookie('password', 'azerty', time() + 365*24*3600, null, null, false, true);

echo 'Votre nouveau login est : '.$_COOKIE['login'].'</br>';
echo 'Votre nouveau mot de passe est : '.$_COOKIE['password'];

?>
