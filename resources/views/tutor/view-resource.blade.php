@extends('layouts.tutor-dashboard')

@section('content')
<div class="content">
                <div class="card card-register">
                    <div class="card-body">
                    <div class="card-header">
                    <h4 class="card-title">Resources Available</h4>
                    </div>
                    <a href="{{route('files.create')}}" class="btn btn-default " role="button">Add Resources</a>
     

        <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>Filename</th>
                                            <th>Description</th>
                                            <th>File</th>
                                            <th class="text"> Action </th>
                                        </thead>
                                        <tbody>
                                            @foreach($files as $file)
                                            <tr>
                                            <td>{{$file->title}}</td>
                                            <td>{{$file->description}}</td>
                                            <td class="text"><a href="/public/files/{{$file->title}}" download="{{$file->file}}"><button type="button" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true">Download</i></button> </a></td>
                                            <td><button type="button" class="btn btn-warning">Delete</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
</div>
                    </div>
                </div>
            </div>
@endsection
