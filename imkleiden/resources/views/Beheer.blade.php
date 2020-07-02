@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
            <aside class="col-12 col-md-2 p-0 bg-secondary flex-shrink-1">
                <nav class="navbar navbar-expand navbar-dark bg-secondary flex-md-column flex-row align-items-start py-2">
                    <div class="collapse navbar-collapse ">
                        <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                            <p class="text-light">Je bent ingelogd als {{ Auth::user()->name }}</p>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="?edit=home"><i class="fa fa-book fa-fw"></i> <span class="d-none d-md-inline">Edit home page</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="?edit=activiteiten"><i class="fa fa-cog fa-fw"></i> <span class="d-none d-md-inline">Edit activiteiten page</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="#"><i class="fa fa-heart codeply fa-fw"></i> <span class="d-none d-md-inline">Edit home page</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="#"><i class="fa fa-star codeply fa-fw"></i> <span class="d-none d-md-inline">Edit home page</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="#"><i class="fa fa-star fa-fw"></i> <span class="d-none d-md-inline">Edit home page</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </aside>
            <main class="col bg-faded py-3 flex-grow-1">

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                @if (isset($_GET['edit']))
                        <?php $edit=$_GET['edit']; ?>
                        @if ($edit == 'home')
                            <h2>Edit home</h2>

                                {!! Form::open(['url' => 'edit_page/submit']) !!}
                                <div class="form-group">
                                    {{Form::label('header', 'Header')}}
                                    {{Form::textarea('header', $home_page[0]->header, ['class' => 'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('body', 'Body')}}
                                    {{Form::textarea('body', $home_page[0]->body, ['class' => 'form-control'])}}
                                </div>
                                <div>
                                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                                </div>
                                {!! Form::close() !!}
                        @endif
                        @if ($edit == 'activiteiten')
                            <h2>Edit activiteiten</h2>
                        @endif
                @endif
            </main>
        </div>
    </div>
@endsection
