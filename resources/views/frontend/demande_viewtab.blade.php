<!DOCTYPE html>
<html lang="en">
<head>
  <title>Demandes view</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/views.css" />

    <!-- bootstrap link -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

</head>
<body>
<div class="container">
  <h2 class="text-center" style="margin:20px 30px;">View demandes</h2>
  <div id="submit-bt-view">
    <a href="{{url('/demande')}}" style="text-decoration:none;">
       <button class="submit-btv" type="button" >Ajouter</button></a>
  </div>     
  <table class="table table-bordered table-striped" id="tEditable">
    <thead>
      <tr>
        <!-- <th>N° table</th> -->
        <th id="nd">N° demande</th>
        <th >Date demande</th>
        <th>Motif demande</th>
        <th>type_demande_id</th>
        <th>Operations</th>


      </tr>
    </thead>
    <tbody>
    @foreach ($demandes as $demande)
      <tr>
      <!-- <td>{{ $demande->table_num }}</td> -->
      <td contenteditable="true">{{ $demande->demande_id }}</td>
      <td>{{ $demande->demande_date }}</td>
      <td>{{ $demande->demande_motif }}</td>
      <td>{{ $demande->type_demande_id }}</td>
      <td>{{ $demande->Num_commission }}</td>
      <td>
        <a href="edit/{{$demande->demande_id}}">edit &nbsp;</a>
        <a href="delete/{{$demande->demande_id}}">delete</a>

      </td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<!-- <script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
<script src="bootstable.min.js"></script> -->
<!-- <script>
         document.addEventListener('DOMContentLoaded', function(){
            // your JS here
         });
</script> -->
<!-- <script src="js/views.js"></script> -->
</body>
</html>
