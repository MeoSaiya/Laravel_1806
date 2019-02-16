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
      <h3 class="text-center">This is EditProfile</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-ld-12">
      @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>
    <div class="col-lg-12">
      <form action="{{ route('admin.handleEdit', ['id'=>$info['id']]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="fullname">(*) Fullname</label>
          <input type="text" id="fulname" class="form-control" name="fullname" value="{{ $info['fullname'] }}">
          <input type="hidden" name="idProfile" value="{{ $info['id'] }}">
        </div>
        <div class="form-group">
          <label for="nickname"> Nickname</label>
          <input type="text" id="nickname" class="form-control" name="nickname" value="{{ $info['nickname'] }}">
        </div>
        <div class="form-group">
          <label for="email">(*) Email</label>
          <input type="text" id="email" class="form-control" name="email" value="{{ $info['email'] }}">
        </div>
        <div class="form-group">
          <label for="avatar">Avatar</label>
          <input type="file" id="avatar" name="avatar">
          <br>
          <img src="{{ URL::to('/') }}/upload/images/{{ $info['avatar'] }}" alt="">
        </div>
        <div class="form-group">
          <label for="phone">(*) Phone</label>
          <input type="text" id="phone" class="form-control" name="phone" value="{{ $info['phone'] }}">
        </div>
        <div class="form-group">
          <label for="address">(*) Address</label>
          <input type="text" id="address" class="form-control" name="address" value="{{ $info['address'] }}">
        </div>
        <div class="form-group">
          <label for="birthday">(*) Birthday</label>
          <input type="date" id="birthday" class="form-control" name="birthday" value="{{ $info['birthday'] }}">
        </div>
        <div class="form-group">
          <label for="gender">(*) Gender</label>
          <select name="gender" id="gender">
            <option value="1" {{ $info['gender'] == 1 ? 'selected = selected' : ""}} >Nam</option>
            <option value="0" {{ $info['gender'] == 0 ? 'selected = selected' : ""}} >Nu</option>
          </select>
        </div>
        <div class="form-group">
          <label for="single">(*) Single</label>
          <select name="single" id="single">
            <option value="1" {{ $info['gender'] == 1 ? 'selected = selected' : ""}}>Doc than</option>
            <option value="0" {{ $info['gender'] == 0 ? 'selected = selected' : ""}}>Co gia dinh</option>
          </select>
        </div>
        <div class="form-group">
          <label for="status">(*) Status</label>
          <select name="status" id="status">
            <option value="1" {{ $info['gender'] == 1 ? 'selected = selected' : ""}}>Active</option>
            <option value="0" {{ $info['gender'] == 0 ? 'selected = selected' : ""}}>Deactive</option>
          </select>
        </div>
        <div class="form-group">
          <label for="description">(*) Description</label>
          <textarea type="text" id="description" class="form-control" name="description" rows="8"> {!! $info['description'] !!} </textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block" name="editProfile">Save +</button>
      </form>
    </div>
  </div>
</div>
@endsection
        