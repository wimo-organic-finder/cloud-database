@extends('admin/default')
@section('content')

    <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    Book title:
    <br />
    <input type="text" name="title" class="form-control" />
    <br /><br />
    Files:
    <br />
    <input type="file" name="file" />
    <br /><br />
                    Description :
                    <br />
                    <textarea name="description"></textarea>
                    <br /><br />
    <input type="submit" value=" Save " />

    </form>

@stop