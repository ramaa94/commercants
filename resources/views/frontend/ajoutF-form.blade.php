<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/demande.css" />
    <title>Document</title>
</head>
<body id="body">
<div id="main-ajoutF">
    <span id="titre-ajoutF">Ajouter une Famille</span>

    
    <form action="submit" method="POST">
        @csrf   
     </section>
     <div id="info-dossier">
      <section id="info-societe" class="sections">
        <label>Nouvelle famille d'activité:</label>
        <input type="text" placeholder="ajouter famille" name="name" > 
     </section>
   
     <div id="submit-bts-ajoutF">
       <button class="submit-bts"   type="submit">Ajouter</button>
     </div>
    </form>
</div>

</body>
</html>