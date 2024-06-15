@extends( "layout.layout" )
@section( "content" )
<div class="container-fluid">
    <h1 class="mt-4">Articulos</h1>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="box">
        <form action="{{ route( 'articles.store' ) }}" method="POST">
                @csrf
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control" name="title" required value="{{old('title')}}">
            </div>
            <div class="mb-3">
                <label  class="form-label">Contenido</label>
                <textarea class="form-control" name="content" rows="3">{{old('content')}}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <select class="form-control select2" name="user_id">
                    <option value=""></option>
                    @foreach ($users as $user)
                        <option {{ ( @$user->id == old('user_id') ) ? 'selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>
@endsection





