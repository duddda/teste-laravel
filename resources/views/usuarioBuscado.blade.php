<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<div class="container mt-5">
    <div class="row">
        <div class="col order-last">
        </div>
        <div class="col">
            <img src="{{$usuario['avatar_url']}}" alt="">
            <h5>Nome: {{$usuario['name']}}</h5><br>
            <h5>Bio: {{$usuario['bio']}}</h5><br>
            <h5>Repositórios:</h5>
            @foreach ($repos as $repo)
            <p>Nome: {{ $repo['name'] }}</p><br>
            <p>Link: <a href='{{ $repo['html_url'] }}'>{{ $repo['html_url'] }}</a></p>
            @endforeach
            <br><a href='/'>Voltar</a>
        </div>
        <div class="col order-first">
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</body>

</html>
