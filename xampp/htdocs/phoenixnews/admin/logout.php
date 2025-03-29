<?php
session_start();
session_destroy();
header('Location:/phoenixnews/login');
exit();