<form action="/category" method="POST">
    @csrf
    <div> 
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" required />
    </div>
    <div> 
        <label for="description">Descrição</label>
        <textarea name="description" id="description" placeholder="Digite a descrição..." required> </textarea>
    </div>
    <button type="submit">Criar</button> 
</form>