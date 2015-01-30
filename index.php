enviando
<?php
echo exec('cd /usr/local/bin ; yowsup-cli demos --config a.txt --send 593' . htmlspecialchars($_GET["numero"]) .' "'.htmlspecialchars($_GET["mensaje"]). '"');

?>
