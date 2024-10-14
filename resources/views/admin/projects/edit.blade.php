@extends('layouts.dashboard')

@section('content-main')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Modifica</h2>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="post">
                @csrf
                @method('PUT') 
                <div class="row">
                    <div class="col-12">
                        <label for="" class="control-label">Nome del Progetto</label>
                        <input type="text" name="title" id="" class="form-control" placeholder="Nome del Progetto" value="{{ old('title', $project->title) }}">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">Descrizione</label>
                        <textarea name="description" id="" cols="25" row="10" class="form-control">{{ old('description', $project->description) }}</textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection