<?php 

// initialisation de la ssession curl  
$ch = curl_init();

// récupération du fichier JSON pour extraction
curl_setopt($ch, CURLOPT_URL, "http://51.91.108.32/newsletters");

$newsletter[] = json_decode('newsletters.json');

// execution de la fonction
curl_exec($ch);
    

// Si formulaire soumis et données transmises :
    // Méthode = POST
    // Données de POST non vide. empty($_POST) : si vide = true : sinon false)
    // sécurisation du formulaire
    if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['newsletter'])) {
        $agreeNewsletter = htmlspecialchars(htmlentities($_POST['newsletter']));

        // La ligne ci-dessous permet de récupérer l'utilisateur de la session dans le post
        $_COOKIE['utilisateurs'] = $_POST['utilisateur'];

        // en cas d'envoie, un mail sera envoyé avec les informations enregistré par l'utilisateur
        // le but étant de transférer les valeurs que renvoie la fonction json-decode dans la variable newsletter
        // dans le but de prendre les informations nécessaire pour constituer le message
        // non fonctionnel
        
        // mail(
        //     to: $_COOKIE['email'],
        //     subject: $newsletter['title'],
        //     message: $newsletter['content'],
        // )
    }

    

        // les données passent bien dans le POST

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Bienvenue sur le formulaire de newsletter
    </h1>

    <form action="" method="post">
        <h1>
            Quelle newsletter souhaitez-vous envoyer ?
        </h1>
        <label for="crypto">crypto</label>
        <input type="checkbox" name="newsletter" value="crypto" id="crypto">

        <label for="marchine-learning">marchine-learning</label>
        <input type="checkbox" name="newsletter" value="marchine-learning" id="marchine-learning">

        <input type="checkbox" name="newsletter" value="web-developpement">
        <label for="web-developpement">web-developpement</label>

        <input type="checkbox" name="newsletter" value="product-design">
        <label for="product-design">product-design</label>

        <input type="submit" name="submit" value="submit" id="submit">
    </form>
    
</body>
</html>