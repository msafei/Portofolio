<?php
$path = 'C:\Users\USER\.config\herd\bin\php84\php.ini';
$content = file_get_contents($path);

// Clean up weird null bytes from powershell pipe
$clean = str_replace("\0", '', $content);

// Remove existing upload_tmp_dir and sys_temp_dir
$lines = explode("\n", $clean);
$filtered = array_filter($lines, function($line) {
    return strpos($line, 'upload_tmp_dir') === false && strpos($line, 'sys_temp_dir') === false;
});

// Add correct config
$newConfig = implode("\n", $filtered);
$newConfig .= "\n\n[Custom_Temp_Dir]\n";
$newConfig .= "sys_temp_dir=\"C:\Windows\Temp\"\n";
$newConfig .= "upload_tmp_dir=\"C:\Windows\Temp\"\n";

file_put_contents($path, $newConfig);
echo "Successfully updated php.ini\n";
