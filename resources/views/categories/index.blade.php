@extends('app')

@section('content')
<div class="container w-25 border p-4 my-4">
    <div class="row mx-auto">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            @error('name')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="name" class="form-label">Titulo de la tarea</label>
                <input type="text" class="form-control" id="title" name="name">
                <div id="emailHelp" class="form-text">Escribi el titulo de la tarea que deseas</div>
                
                <label for="color" class="form-label">Titulo de la tarea</label>
                <input type="color" class="form-control" id="title" name="color">
            </div>


            <button type="submit" class="btn btn-primary">Crear nueva categoria</button>
        </form>
        <div>
            @foreach ($categories as $category)
                <div class="row py-1">
                   {{--  <div class="col-md-9 d-flex align-items-center">
                        <a href="{{ route('categories.edit', ['id' => $category->id]) }}">{{ $category->name }}</a>
                    </div>

                    <div class="col-md-3 d-flex justify-content-end">
                        <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div> --}}
                    {{ $category->name }}
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection()