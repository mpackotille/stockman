<!DOCTYPE html>
<html>
<body>

<h2>Création Article</h2>

<form action="/articles" method="post">
  @csrf
  <label for="nom">Nom</label><br>
  <input type="text" id="nom" name="nom" value="CAROTTE"><br>
  <label for="qte">Qte</label><br>
  <input type="number" id="qte" name="qte"  value="0"><br><br>
  <input type="submit" value="Créer">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
