<h1>Lista de Categorias</h1>
<div style="display:flex; justify-content:end; align-itens:center">
    <a href="/category/create">Criar uma categoria</a>
</div>

<table border="1px">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Comida</th>
        <th>Descrição</th>
        <th>Editar</th>
        <th>Deletar</th>
</tr>
@foreach($allCategory as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td><a href="/category/{{$category->id}}">{{$category->name}}</a></td>
        <td>{{$category->food->count()}}</td>
        <td>{{$category->description}}</td>
        <td><a href="/category/{{$category->id}}/edit">Editar</a></td>
        <td>
            <form action="/category/{{$category->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Deletar</button>
            </form>
        </td>

</tr>
@endforeach
</table> 