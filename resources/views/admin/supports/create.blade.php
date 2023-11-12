<h1>Add support</h1>

<form action="{{ route('supports.store') }}" method="post">
    {{--    <input type="hidden" value="{{ csrf_token() }}" name="_token">--}}
    @csrf() {{--funciona como no comando acima--}}
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>
