<?php
// Establece el directorio donde se encuentra el repositorio Git
$repo_dir = '/home4/aprende9/public_html';

// Actualiza el repositorio Git
$output = shell_exec("cd {$repo_dir} && git pull");

// Muestra el resultado de la actualización (esto puede ser útil para fines de depuración)
echo "<pre>$output</pre>";
?>