<?php  
include 'configuration.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
       
        $Select = "SELECT * FROM person WHERE id=$id";
        // get result
        $result = mysqli_query($connect, $Select);

         // fetch to array
        $person = mysqli_fetch_assoc($result);

    }

    if(!empty($_POST)){
        
        $prenom = $_POST['Prenom'];
        $nom = $_POST['Nom'];
        $age = $_POST['Age'];

        $update ="UPDATE person SET 
        prénom='$prenom',nom='$nom',age='$age'";

        mysqli_query($connect, $update);
        header('location: index.php');
        
    };
    
?>
<form action="" method="post">
    <div>
        <input type="text"  value="<?= $person['prénom'] ?>" name="Prenom">
    </div>
    <div>
    <input type="text"  value="<?= $person['nom'] ?>"name="Nom">
     </div>
    <div>	
        <input type="text" value="<?= $person['age'] ?>" name="Age">
    </div>
	<div>
        <button type='submit'>Modifier</button>
    </div>
	
</form>