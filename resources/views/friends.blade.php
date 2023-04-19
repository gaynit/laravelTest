@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

               <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            Dashboard
                        </a>
                        <a href="/home" class="list-group-item list-group-item-action">Home</a>
                        <a href="/home/friends" class="list-group-item list-group-item-action">Friends</a>
                        <a href="#" class="list-group-item list-group-item-action">Settings</a>
                    </div>
                </div>   
                <div class="col-md-8">
                    
<a href="" class="btn btn-success my-3"  data-bs-toggle="modal" data-bs-target="">Invite A Friend</a>
<input type="text" name="search" id="search" class="mb-3 form-control" placeholder="Search Here..">

<div class="table-data">

                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($friends as $key=>$friend)

                              <tr>
                                <th >{{ $key+1}}</th>
                                <td>{{ $friend->name }}</td>
                                <td> {{ $friend->email }}</td>
                                <td>
  
   <a href=""
    class="btn btn-danger delete_friend"
    data-id="{{ $friend->id }}"

    > <i class="las la-times"></i></a>
                                </td>
                              </tr>
                              @endforeach

                            </tbody>
                          </table>
                          {!! $friends->links() !!}

                    </div>


                </div>



        </div>

    </div>



@include('friends_js')

@endsection


