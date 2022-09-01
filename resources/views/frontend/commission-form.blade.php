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
<div id="main">
    <span id="titre-dossier">Fromulaire Commission</span>

   <form action="submitcommission" method="POST">
        @csrf     
     </section>
     <div id="info-dossier">
      <section id="info-societe" class="sections">
        <label>Motif de commission:</label>
        <input type="text" name="commission_motif" > 
     </section>
     <section id="info-resp" class="sections">
        <label>Date de commission:</label>
        <input type="date" id="date-dossier" name="commission_date"> 
     </section>
    </div>
    <div id="submit-bts-container">
       <button class="submit-bts" type="submit">Ajouter</button>
       <button class="submit-bts" type="button">Annuler</button>
    </div>
   </form>
</div>

</body>
</html>