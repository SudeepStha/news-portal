@extends('backend.app')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <div class="card-header">
                    <span class="fw-bold fs-3">Articles</span>
                    <a href="{{route('articles.create')}}" class="btn btn-primary float-end">Add articles</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Menu</th>
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
                                <td>
                                    @foreach ($article->menus as $item)
                                        <span class="badge bg-info">{{$item->title }}</span>
                                    @endforeach
                                </td>
                                <td>{!! Str::words($article->description, 4, '...') !!}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('articles.edit', $article->id)}}" class="badge bg-primary">Edit</a>
                                        <a href="{{route('articles.show', $article->id)}}" class="badge bg-info mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $article->id}}">Show</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$article->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fw-bold fs-3" id="exampleModalLabel">Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>                                            
                                                <div class="container">
                                                    <div class="fw-bold fs-4 text-danger">Title:</div> 
                                                    <div class="fw-bold fs-1">{{$article->title}}</div> 
                                                    <div class="fw-bold fs-4 text-danger">Description:</div> 
                                                    <div class="fw-bold fs-5">{!! $article->description !!}</div> 
                                                    <div class="fw-bold fs-4 text-danger">Featured Image:</div> 
                                                    <div class="mb-4"> <img src="{{asset($article->image)}}" alt=""></div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- Button trigger modal -->
                                        {{-- <button type="button" class="badge btn bg-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        demo
                                        </button> --}}
                                        <form action="{{route('articles.destroy', $article->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="badge btn bg-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
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


  
  
  