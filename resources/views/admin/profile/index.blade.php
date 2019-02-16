@extends('admin.base')

@section('content')
<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Profile</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center">This is profile</h3>
      <h3>{{ $mess }}</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <a href="{{ route('admin.formAddProfile') }}"  ><button class="btn btn-primary">Add + </button></a>
    </div>
    <div class="col-md-8">
      <div class="row">
        {{-- <div class="col-md-12"> --}}
          <div class="col-md-9">
            <input type="text" class="form-control" id="txtSearch">
          </div>
          <div class="col-md-3">
            <button class="btn btn-danger" id="btnSearch">Search</button>
          </div>
        {{-- </div> --}}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Avarta</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Birth day</th>
            <th>Gender</th>
            <th>Single</th>
            <th>Description</th>
            <th colspan="2" width="5%" class="text-center">Active</th>
          </tr>
        </thead>
        <tbody>
          @foreach($info as $key => $item)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td><img src="{{ URL::to('/') }}/upload/images/{{ $item->avatar }}" alt="avatar" width="120" height="120"></td>
              <td>{{ $item->fullname }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->phone }}</td>
              <td>{{ $item->address }}</td>
              <td>{{ $item->birthday }}</td>
              <td>{{ $item->gender == 1 ? 'Name' : 'Nu' }}</td>
              <td>{{ $item->single == 1 ? 'Doc than' : 'No doc than' }}</td>
              <td><p>{!! $item->description !!}</p></td>
              <td><a href="{{ route('admin.editProfile', ['id'=> $item->id ]) }}" class="btn btn-info">Edit</a></td>
              <td>
                <button id="profile-{{ $item->id }}" data-id="{{ $item->id }}" class="btn btn-danger btn-delete-profile">Delete</button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-lg-12">
      {{ $info->appends(request()->query())->links() }}
    </div>
  </div>
</div> 
@endsection
@push('javascript')
  <script type="text/javascript">
    $(function(){

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      // bat su kien click
      // viet bang jquery
      $('#btnSearch').click(function() {
        //lay tu khoa ng dung nhap vao
        let keyword = $('#txtSearch').val().trim();
        if(keyword){
          // truyen gia tri len thanh tirnh duyet
          window.location.href = "{{ route('admin.profile') }}" + "?keyword=" + keyword
        }
      })

      //viet ajax
      $('.btn-delete-profile').click(function() {
        // can lay id tuong ung cua profile do
        let idProfile = $(this).attr('data-id');
        idProfile = Number.parseInt(idProfile);
        if(Number.isInteger(idProfile) && idProfile > 0){
          $.ajax({
            url: "{{ route('admin.deleteProfile') }}",
            type: "POST",
            data: {idProfile: idProfile},
            beforeSend:function (){
              $('#profile-'+idProfile).text('Loading...');
            },
            success: function(data){
              $('#profile-'+idProfile).text('Delete');
              if(data.mess === 'ok'){
                alert('Successfull');
                window.location.reload(true);
              }else{
                alert('fail');
                return false;
              }
            }
          })
        }
      });
    });
  </script>
@endpush