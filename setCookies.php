<?php
// setcookie('cross-site-cookie', 'name');
setcookie('cross-site-cookie', 'name', ['samesite' => 'Lax', 'secure' => true]);
// setcookie('cross-site-cookie', 'name', ['samesite' => 'None', 'secure' => true]);