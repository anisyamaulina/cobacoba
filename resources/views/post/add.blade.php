@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Form Input Data</h3>
					</div>
					<div class="panel-body">
						<form role="form" method="POST" action="{{ route('post.save') }}" enctype="multipart/form-data">
					    {{ csrf_field() }}
					    	<div class="form-group">
					    		<label>Acara</label>
					    		<input type="text" name="acara" class="form-control" required="" value="{{ old('acara') }}>
					    	</div>
							<div class="form-group">
					    		<label>Tanggal</label>
					    		<input type="date" name="tanggal" class="form-control" required="" value="{{ old('tanggal') }}">
					    	</div>
							<div class="form-group">
					    		<label>Waktu Mulai</label>
					    		<input type="time" name="waktu_mulai" class="form-control" required="" value="{{ old('waktu_mulai') }}">
					    	</div>
							<div class="form-group">
					    		<label>Waktu Selesai</label>
					    		<input type="time" name="waktu_selesai" class="form-control" required="" value="{{ old('waktu_selesai') }}">
					    	</div>
					    	<div class="form-group">
					    		<button type="submit" class="btn btn-danger btn-sm">Kirim</button>
					    	</div>
					    </form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Post Data</h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Acara</th>
										<th>Tanggal</th>
										<th>Waktu Mulai</th>
										<th>Waktu Selesai</th>
									</tr>
								</thead>
								<tbody>
									@if ($post->count() > 0)
									@foreach ($post as $post)
									<tr>
										<td>{{ $post->acara }}</td>
										<td>{{ $post->tanggal }}</td>
										<td>{{ $post->waktu_mulai }}</td>
										<td>{{ $post->waktu_selesai }}</td>
									</tr>
									@endforeach
									@else
									<tr>
										<td>Tidak ada data</td>
									</tr>
									@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection