<x-layout title="Ver Produtos">
<ul>
    @foreach($produtos as $produto)
        <li>{{$produto->nome}}</li>
    @endforeach
</ul>
</x-layout>