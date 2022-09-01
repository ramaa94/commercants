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
@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
    <span id="titre-ajoutF">Ajouter un pays</span>

    
    <form action="submitP" method="POST">
        @csrf     
     </section>
     <div id="info-dossier">
      <section id="info-societe" class="sections">
        <label>Nouveau pays:</label>
        <input type="text" placeholder="ajouter pays" name="country_name" > 
     </section>
   
    <div id="submit-bts-ajoutF">
       <button class="submit-bts" type="submit">Ajouter</button>
    </div>
</form> 
</div>

</body>
</html>