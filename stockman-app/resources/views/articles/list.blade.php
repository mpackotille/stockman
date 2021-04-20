<html>
<body>
    <h1>Liste des {{$count}} articles </h1>
    <table>
        <tr><th>Numero</th><th>Nom</th><th>Qte</th></tr>
       <!-- <tr><td>1</td><td>Sucre</td><td>10</td></tr>
        <tr><td>2</td><td>Sel</td><td>20</td></tr> -->
        @foreach ($articles as $article)
        <tr><td>{{$article->getId()}}</td><td>{{$article->getNom()}}</td><td>{{$article->getQte()}}</td></tr> 
        @endforeach 
    </table>
</body>
</html>