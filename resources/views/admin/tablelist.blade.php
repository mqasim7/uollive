@extends('admin.layout.adminmaster')

@section('title')
    Table List
@endsection

@section('adminname')
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <img src="{{asset('uploads/profileimages/'.$admin->profileimage)}}"
                 style="  margin-top: -5px;margin-right: 5px;  float: left;width: 30px;  height: 30px; border-radius: 50%">
            {{$admin->name}} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{url('admin/profile/'. $admin->id)}}" class="fa fa-btn fa-user">
                    Profile
                </a>
                <a href="{{ url('/admin/logout') }}" class="fa fa-btn fa-sign-out"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endsection



@section('tablelist-active')
    active
@endsection

@section('profile')
    {{url('admin/profile/'. $admin->id)}}
@endsection

@section('tablelist')
    {{route('tablelist', $admin->id )}}
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Category Table</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>Sr No.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                </thead>
                                <tbody>
                                <?php $count = 1; ?>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{($categories ->perPage())*($categories->currentPage()-1)+$count}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <td><img src="{{asset('uploads/'.$category->image)}}"></td>
                                        <td><a href="{{route('category.show',$category->id)}}" class="btn btn-primary">Show</a>
                                        </td>
                                        <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-success">Update</a>
                                        </td>
                                        <td>
                                            {!!Form::open(['method'=>'delete','route' => ['category.destroy',$category->id]])!!}
                                            {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                                            {!!Form::close()!!}
                                        </td>
                                        <?php $count++; ?>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection