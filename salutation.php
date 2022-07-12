<?php
include "vues/header.html.php"

?>



<?php
if(!empty ($_POST) ) {
   $prenom = $_POST['prenom'];
    echo "Bonjour " . $prenom;
} else {


?>
 
<form action="" method="post">
    <input type="text" name="prenom">
    <button type="submit"> Saluer</button>
</form>

<?php }?>