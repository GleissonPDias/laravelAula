
<form action="/category/{{$category->id}}" method="POST">
    @method('PUT')
    @csrf
    <div> 
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{$category->name}}"  />
    </div>
    <div> 
        <label for="description">Descrição</label>
        <textarea name="description" id="description" placeholder="Digite a descrição..." >{{$category->description}}</textarea>
    </div>
    <button type="submit">Editar</button> 
</form>