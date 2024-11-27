<?php

session_start();

session_unset(); //بيمسح كل المتغيرات المتسجله غب الجلسه الحاليه 

session_destroy();// بيدمر الملف كامل
