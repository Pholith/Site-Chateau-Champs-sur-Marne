
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<?php

$current_file_name = basename($_SERVER['SCRIPT_FILENAME']);
if ($current_file_name === "friseChronologique.php") {
    print('<script src="../../js/chrono.js"> </script>');
}

$pagePhp = file_get_contents($current_file_name);
// Si la page contient des boutons, alors on importe le fichier js

if (strpos($pagePhp, 'enSavoirPlus') != false) {
    print('<script src="../../js/enSavoirPlus.js"> </script>');
}

function console_log($data){
    print('<script>');
    print('console.log('. json_encode( $data ) .')');
    print('</script>');
}
?>



<!-- Les Fichiers JS pour chaque page -->
<script src="../../js/titreDeroulant.js"> </script>
<script src="../../js/menuTel.js"></script>
