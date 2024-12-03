<?php
echo '<pre>';
echo shell_exec('php artisan route:clear');
echo shell_exec('php artisan cache:clear');
echo '</pre>';
?>
