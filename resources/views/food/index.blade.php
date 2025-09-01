<h1>Lista de Comidas</h1>
<div style="display:flex; justify-content:end; align-itens:center">
    <a href="/food/create">Criar uma comida</a>
</div>

<table border="1px">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Calorias</th>
        <th>Descrição</th>
        <th>Editar</th>
</tr>
@foreach($allFood as $food)
    <tr>
        <td>{{$food->id}}</td>
        <td>{{$food->name}}</td>
        <td>{{$food->calories}}</td>
        <td>{{$food->description}}</td>
        <td><a href="#">Editar</a></td>

</tr>
@endforeach
</table> 