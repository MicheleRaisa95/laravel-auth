@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="header-page justify-content-between d-flex align-items-center mb-3">
        <h1>Pagina Post</h1>
       <div>
         <button class="btn btn-primary">Crea Nuovo</button>
       </div>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col" class="col-1" >#</th>
      <th scope="col" class="col-8">Title</th>
      <th scope="col" class="col-3"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Title</td>
      <td>bottoni</td>
    </tr>
    <tr>
  </tbody>
</table>
</div>
@endsection
