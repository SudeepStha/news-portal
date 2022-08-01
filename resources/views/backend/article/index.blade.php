@extends('backend.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold fs-3">Articles</span>
                    <a href="{{ route('article.create') }}" class="btn btn-primary float-end">Add articles</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($article as $index => $article)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->slug}}</td>
                                <td>{!! Str::words($article->description, 4, '...') !!}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="row">
                        @foreach ($article as $article)
                        <div class="col-md-3">
                            <div class="card p-2" style="background-color: rgb(199, 192, 192); border-radius: 10px">
                                <span class="fw-bold fs-4">{{$article->id}}</span><span class="fw-bold fs-5">{{ $article->title}}</span> <br>
                                {{ $article->slug}} <br>
                                {!!Str::words( $article->description, 7)!!}
                                <hr class="bg-danger">
                                <div class="d-flex justify-content-evenly">
                                    <a href="/article/{{$article->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/article/{{$article->id}}" class="btn btn-info btn-sm">Show</a>
                                    <a href="" class="btn btn-success btn-sm">Print</a>
                                    <form action="/article/{{$article->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection