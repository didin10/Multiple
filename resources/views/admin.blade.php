@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <center> 
                <br>
                <h1>Selamat Datang Di Halaman Admin</h1>
                <br>
                <img src="/img/BG.png">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
            </center>
        </div>
    </div>
</div>
@endsection

