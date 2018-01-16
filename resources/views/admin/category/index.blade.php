@extends('admin.master')
@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h3>Products</h3>
<div class="navbar">
        <a class="navbar-brand" href="#">Categories =></a>
        <ul class="nav navbar-nav">
            @if(!empty($categories))
            @forelse($categories as $category)
                <li class="active">
                    <a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
                </li>
                @empty
           
                <li>No Items</li>
              @endforelse

              @endif

        </ul>


  



        
                {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
              
                    <div class="form-group">
                        {{ Form::label('name', 'Title') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>


                </div>
               
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                {!! Form::close() !!}
            </div><!-- /.modal-content -->
     
    </div>




    {{--products--}}
    @if(isset($products))

    <h3>Products</h3>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Products</th>
            </tr>
        </thead>
        <tbody>
@forelse($products as $product)
    <tr><td>{{$product->name}}</td></tr>
        @empty
        <tr><td>no data</td></tr>
        @endforelse

        </tbody>
    </table>
    </main>
    @endif
@endsection
