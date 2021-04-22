<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".delete").click(function(){
        $.ajax({
            url: $(this).attr("to"),
            type:"delete",
            success: function(result){
                alert("articles supprimé");
                window.location.assign("articles");
            }
        });
    });
});
</script>
</head>
<body>
    <h1>Liste des {{$count}} articles </h1>
    <table>
        <tr><th>Numero</th><th>Nom</th><th>Qte</th><th>DELETE</th></tr>
       <!-- <tr><td>1</td><td>Sucre</td><td>10</td></tr>
        <tr><td>2</td><td>Sel</td><td>20</td></tr> -->
        @foreach ($articles as $article)
        <tr>
            <td>{{$article->ID}}</td>
            <td>{{$article->NOM}}</td>
            <td>{{$article->QTE}}</td>
            <td><button class="delete" to="articles/{{$article->ID}}">delete</button></td>
            </tr> 
        @endforeach 
    </table>
</body>
</html>