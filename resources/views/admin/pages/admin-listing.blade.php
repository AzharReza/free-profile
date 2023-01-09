@extends('admin.admin-layout')
@section('title','Users List')
@section('page-css')@endsection
@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">User Profiles Details</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="examplee" class="display expandable-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>ID#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Father</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Change Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($users)
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->first_name}}</td>
                                                <td>{{$user->last_name}}</td>
                                                <td>{{$user->father_name}}</td>
                                                <td><img src="{{asset($user->pic)}}" width="50px" height="50px"></td>
                                                <td>{{$user->status?'Approved':'Pending'}}</td>
                                                <td><a class="btn btn-primary" href="{{route('userApprove',$user)}}">View</a> |
                                                    <a class="btn btn-primary" href="{{route('userEdit',$user)}}">Edit</a></td>
                                            </tr>
                                        @endforeach
                                        @else
                                            <div class="justify-content-center">No Data Found</div>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

@endsection
@section('page-js')
@endsection

