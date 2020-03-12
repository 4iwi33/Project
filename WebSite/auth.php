<?php
setcookie('user', 'yes',time() + 3600, '/'); //.project-states.000webhostapp.com

header('Location: /');
?>