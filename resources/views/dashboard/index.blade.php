@extends('dashboard.layouts.main')

@section('contents')
@php
    $users = DB::table('users')->distinct()->get();
    
@endphp
<div class="container-fluid mt-5" style="width: 165vh;" >
  <div class="shadow p-4 " style="border-radius: 10px">
  <h1 id="home"># Daftar User Admin</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Waktu Pendaftaran</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
      </tr>
    @endforeach
  </table>
</div>

</div>


@endsection