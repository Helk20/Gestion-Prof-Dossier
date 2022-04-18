@extends('voyager::master')
@section ('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table des professeurs</title>

</head>
<body>
<table border="1">
<h1>Table des professeurs</h1>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Professeurs</th>
                    <th>dossier_scientifique</th>
                    <th>dossier_pedagogique</th>
                    <th>dossier_administratif</th>
                </tr>
            </thead>
            <tbody>
            <?php 
  $con = new mysqli('localhost','root','','laravel');
  $query = $con->query("
    SELECT 
      id ,
      nom ,
      DossierS as d_s,
      DossierA as d_p,
      DossierS as d_a
    FROM professeurs
    GROUP BY id
  ");

  foreach($query as $data)
  {
        ?>
        <tr>
            <td><?php echo $id[] = $data['id']; ?></td>
            <td><?php echo $nom[] = $data['nom']; ?></td>
            <td><a href="<?php echo $d_s[] = $data['d_s']; ?>">Télécharger</a></td>
            <td><a href="<?php echo $d_p[] = $data['d_p']; ?>">Télécharger</a></td>
            <td><a href="<?php echo $d_a[] = $data['d_a']; ?>">Télécharger</a></td>
        </tr>
    <?php 
  }

?>
            
            </tbody>        
            
        </table>
</body>
</html>
@endsection