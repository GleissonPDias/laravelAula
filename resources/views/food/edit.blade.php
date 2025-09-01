
<form action="/food/{{$food->id}}" method="POST">
    @method('PUT')
    @csrf
    <div> 
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{$food->name}}"  />
    </div>
    <div> 
        <label for="description">Descrição</label>
        <textarea name="description" id="description" placeholder="Digite a descrição..." >{{$food->description}}</textarea>
    </div>
    <div>
        <label for="calories">Calorias</label>
        <input type="number" id="calories" name="calories" placeholder="Digite as calorias" value="{{$food->calories}}" />
    </div>
    <button type="submit">Editar</button> 
</form>