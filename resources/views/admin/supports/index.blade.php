<h1>Listagem dos supports</h1>

<a href="{{ route('supports.create') }}">Novo Support</a>

<table>
    <thead>
        <th>assunto</th>
        <th>status</th>
        <th>descrição</th>
        <th>ações</th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href=" {{ route('supports.show', $support->id) }} ">Detalhes</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
