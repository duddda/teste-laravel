<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col order-last">
            </div>
            <div class="col">
                <h1>Buscar usuário</h1>
                <form action="/busca-usuario" method="POST">
                <input type="hidden" name="_method" value="POST" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario:</label>
                        <input type="text" name="usuario" class="form-control" aria-describedby="usuario" placeholder="usuario">
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Buscar</button>
                </form>
            </div>
            <div class="col order-first">
            </div>
        </div>
    </div>

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</html>
