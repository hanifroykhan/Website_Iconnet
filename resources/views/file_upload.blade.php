@extends('template')
@section('content')

<head>
<style>
    .container{
        max-width: 500px;
    }
    dl, olm ul{
        margin: 0;
        padding: 0%;
        list-style: none;
    }

</style>
<head>

<body>

@csrf
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <strong>{{ $message }} </strong>
</div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container mt-5">
    <form action="{{route('fileupload.store')}}" method="POST" enctype="multipart/form-data">
    <h2 class="text-center mb-5">Upload Document</h2>
    {{ csrf_field() }}
<div class="custom-file">
    <input type="file" name="file" class="custom-file-input" id="chooseFile">
    <label class="custom-file-label" for="chooseFile">Select File</label>
</div>

<button type="submit" name="submit" class="btn btn-primary btn-block mt-4">Send Document</button>
</form>
</div>

 </body>
@endsection
