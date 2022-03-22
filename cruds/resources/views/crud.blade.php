<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<form  method="POST" action="{{url('/crud')}}" >


    <h4>nombre:</h4>

   <input type="text" name="nombre" class="form-control">

   <br>
   <h4>cargo:</h4>

   <input type="text" name="cargo" class="form-control">


   <button type="submit" class="btn btn-success">guardar</button>

</form>
<form action="{{url('/crud')}}" method="get">
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre:</th>
        <th scope="col">Cargo:</th>
        <th scope="col">acciones:</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">$reg['id']</th>
        <td>$reg['nombre']</td>
        <td>$reg['cargo']</td>
        <td>
            <button class="btn btn-primary" type="reset">borrar</button>
            <button type="button" class="btn btn-info">Modficar</button></td>
      </tr>
    </tbody>
  </table>


</form>
