<?php
$path = 'C:\Users\USER\.config\herd\bin\php84\php.ini';
$content = file_get_contents($path);
$content = str_replace('"C:\Windows\Temp"', '"d:\00 Data Kerja\00 Program\Php Native\Portofolio2026\storage\framework\cache"', $content);
file_put_contents($path, $content);
echo "Done";
