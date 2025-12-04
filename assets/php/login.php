<?php include "connexion.php"; ?>

<form method="POST">
    <input type="text" name="identifiant" placeholder="Identifiant">
    <input type="password" name="motdepasse" placeholder="Mot de passe">
    <button type="submit">Se connecter</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["identifiant"];
    $mdp = $_POST["motdepasse"];

    $sql = "SELECT * FROM employes WHERE identifiant='$id' AND motdepasse='$mdp'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("Location: dashboard.php");
    } else {
        echo "Identifiants incorrects";
    }
}
?>
