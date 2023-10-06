<x-layout title="Criar produto">
        <form action={{route('produtos.store')}} method="post">
            @csrf
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="descricao">Descricao</label>
            <input type="text" name="descricao" id="descricao">
            <label for="imagem">Imagem</label>
            <input type="text" name="imagem" id="imagem">
            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor"/>
            <button type="submit">Enviar produto</button>
        </form>
</x-layout>