<?php include 'upload.php' ?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <title>Formulaire</title>
</head>
<body>

<div class="container">

<div class="form-sec">
  <h4>Contact form</h4>

  <form name="qryform" id="qryform" enctype="multipart/form-data" method="post" action="formulaire_hakan.php" onsubmit="return(validate());" novalidate="novalidate">

   <div class="form-group">
    <input type="radio" name="gender" value="madame" >
    <label for="Madame">Mme</label>
    <input type="radio" name="gender" value="mademoiselle">
    <label for="Mademoiselle">Melle</label>
    <input type="radio" name="gender" value="monsieur">
    <label for="Monsieur">Mr</label>
   </div>


    <div class="form-group">
      <label>Nom:</label>
      <input type="text" class="form-control" id="name" placeholder="Entrer Nom" name="name">
    </div>
    <div class="form-group">
      <label>Prénom:</label>
      <input type="text" class="form-control" id="first_name" placeholder="Entrer Prénom" name="first_name">
    </div>
    <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email">
    </div>

    <div class="form-group">
      <label for="sujet">Objet:</label>
      <select class="form-control" id="sujet" name="sujet">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>

    <div class="form-group">
      <label>Votre message:</label>
      <textarea name="msg" class="form-control" id="msg" placeholder="Entrer votre message"></textarea>
    </div>

    <p>Pick up an image to upload, and press "upload" </p>





    <div class="form-group">
     <input type="radio" name="choix" value="html" >
     <label for="html">HTML</label>
     <input type="radio" name="choix" value="texte">
     <label for="texte">Texte</label>
    </div>

      <input type="file" size="32" name="image_field" value="">
      <button type="submit" class="btn btn-default"name='salope'>Submit</button>

  </form>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
