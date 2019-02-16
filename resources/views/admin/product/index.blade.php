@extends('admin.base')

@section('content')
	<div class="container-fluid">
		<div class="row">
			@foreach($data as $key => $item)
			<div class="col-md-4">
				{{-- <img src="{{ $item->image }}" alt=""> --}}
				<img src="https://i-xem.mkocdn.com/i.xem.sb/data/photo/2019/02/12/041/ra-vay-1549959091-400.jpg" alt="">
				<p>{{ $item->name }}</p>
				<p>{{ $item->money }}</p>
				<a href="{{ route('admin.addCart',['id' => $item->id ])}}" class="btn btn-primary btn-small">Add Cart</a>
			</div>
			@endforeach
		</div>
	</div>
@endsection
