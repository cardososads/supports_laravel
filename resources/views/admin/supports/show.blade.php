<h1>Detalhes do support {{ $support->id }}</h1>

<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descrição: {{ $support->body }}</li>
</ul>
<form action="{{ route('supports.destroy', $support->id) }}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit">Deletar support</button>
</form>
<a href=" {{ route('supports.index') }} ">Voltar</a>
