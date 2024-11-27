<?php

session_start();

echo "Welcome " . $_SESSION['name'] . " And Your Id Is " . $_SESSION['id'];
