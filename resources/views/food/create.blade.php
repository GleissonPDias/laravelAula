<form action="/food" method="POST">
    @csrf
    <div> 
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" required />
    </div>
    <div> 
        <label for="description">Descrição</label>
        <textarea name="description" id="description" placeholder="Digite a descrição..." required> </textarea>
    </div>
    <div>
        <label for="calories">Calorias</label>
        <input type="number" id="calories" name="calories" placeholder="Digite as calorias" required/>
    </div>

    <div> 
        <label for="category_id">Categoria</label>
        <select name="category_id">
            @foreach(\App\Models\Category::all() as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Criar</button> 
</form>