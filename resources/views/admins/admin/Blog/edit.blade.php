@extends('admins.admin.app')
@section('title', 'Edit Blog')
@section('page', 'Edit Blog')
@section('content')
    <div class="card">
        <div class="card-header">
            <x-buttons.btn-back route="Blogs.index" />
            <img class="img-circle img-thumbnail float-right" width="50" height="50" src={{asset('uploads/blog/' . $Blog->picture)}} />
        </div>
        <div class="card-body">
            <form action="{{ route('Blogs.update',$Blog) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="Name" name="name" :value="$Blog->name" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.text-input label="Descrption" name="des" :value="$Blog->descrption" />
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <x-inputs.file-input label="EditeImage" name="picture" :value="$Blog->picture" />
                    </div>
                    <div class="col-md-3 col-6">
                        <x-inputs.checkbox-input label="Active" name="active" :value="$Blog->active"/>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>

            </form>
        </div>

    </div>
@endsection
