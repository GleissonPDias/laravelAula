
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
    <div>
    <label for="category_id">Categoria</label>
        <select name="category_id">
            @foreach($categories as $category)
            @if($food->category_id == $category->id)
            <option value="{{$category->id}}" selected>{{$category->name}}</option>
            @else
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
            @endforeach
        </select>
    </div>
    <button type="submit">Editar</button> 
</form>