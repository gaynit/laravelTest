<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
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
















