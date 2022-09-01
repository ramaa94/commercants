<!DOCTYPE html>
<html lang="en">
<head>
  <title>commissions view</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/views.css" />

</head>
<body>
<div class="container">
  <h2 class="text-center" style="margin:20px 30px;">View commissions</h2>
  <div id="submit-bts-view">
    <a href="{{url('/commission')}}" style="text-decoration:none;">
       <button class="submit-btv" type="button" >Ajouter</button></a>
    </div>      
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <!-- <th>N° table</th> -->
        <th>N° commission</th>
        <th>Date commission</th>
        <th>Motif commission</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($commissions as $commission)
      <tr>
      <!-- <td>{{ $commission->table_num }}</td> -->
      <td>{{ $commission->N°commission }}</td>
      <td>{{ $commission->commission_date }}</td>
      <td>{{ $commission->commission_motif }}</td>
      
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>