@extends('admin.layout.adminmaster')

@section('title')
    Admin Dashboard
@endsection

@section('tablecss')


@endsection
@section('adminname')
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <img src="{{asset('uploads/profileimages/'.Auth::user()->profileimage)}}"
                 style="  margin-top: -5px;margin-right: 5px;  float: left;width: 30px;  height: 30px; border-radius: 50%">
            {{Auth::user()->name}}<span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{url('admin/profile/'.Auth::user()->id)}}" class="fa fa-btn fa-user">
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

@section('dashboard-active')
    active
@endsection

@section('profile')
    {{url('admin/profile/'. Auth::user()->id)}}
@endsection

@section('tablelist')
    {{route('tablelist', Auth::user()->id )}}
@endsection


@section('body')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <a href="{{route('category.create')}}">
                            <div class="card-header" data-background-color="blue">
                                <i class="material-icons">add</i>
                            </div>
                        </a>
                        <div class="card-content">
                            <p class="category">Create</p>
                            <h4 class="title">Category</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <a href="{{route('subcategory.create')}}">
                            <div class="card-header" data-background-color="green">
                                <i class="material-icons"> add</i>
                            </div>
                        </a>
                        <div class="card-content">
                            <p class="category">Create</p>
                            <h4 class="title">SubCategory</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">Categories Table</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-info">
                                <th>Sr No.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                                <th></th>
                                <th></th>
                                </thead>
                                <tbody>
                                <?php $count = 1; ?>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{($categories ->perPage())*($categories->currentPage()-1)+$count}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <td><img src="{{asset('uploads/'.$category->image)}}"></td>
                                        <td><a href="{{route('category.show',$category->id)}}"
                                               class="btn btn-primary btn-simple btn-xs"><i class="material-icons">visibility</i></a>
                                        </td>
                                        <td><a href="{{route('category.edit',$category->id)}}"
                                               class="btn btn-success btn-simple btn-xs"><i
                                                        class="material-icons">edit</i></a></td>
                                        <td>
                                            {!!Form::open(['method'=>'delete','route' => ['category.destroy',$category->id]])!!}
                                            <button type="submit" class="btn btn-danger btn-simple btn-xs">
                                                <i class="material-icons">close</i>
                                            </button>
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
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">SubCategories Table</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-info">
                                <th>Sr No.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Action</th>
                                <th></th>
                                <th></th>
                                </thead>
                                <tbody>
                                <?php $count = 1; ?>
                                @foreach($subcategories as $subcategory)
                                    <tr>
                                        <td>{{($subcategories ->perPage())*($subcategories->currentPage()-1)+$count}}</td>
                                        <td>{{$subcategory->name}}</td>
                                        <td>{{$subcategory->description}}</td>
                                        <td>{{$subcategory->category->name}}</td>
                                        <td><a href="{{route('subcategory.show',$subcategory->id)}}"
                                               class="btn btn-primary btn-simple btn-xs"><i class="material-icons">visibility</i></a>
                                        </td>
                                        <td><a href="{{route('subcategory.edit',$subcategory->id)}}"
                                               class="btn btn-success btn-simple btn-xs"><i
                                                        class="material-icons">edit</i></a></td>
                                        <td>
                                            {!!Form::open(['method'=>'delete','route' => ['subcategory.destroy',$subcategory->id]])!!}
                                            <button type="submit" class="btn btn-danger btn-simple btn-xs">
                                                <i class="material-icons">close</i>
                                            </button>
                                            {!!Form::close()!!}
                                        </td>
                                        <?php $count++; ?>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $subcategories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')



@endsection
