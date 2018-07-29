@extends('template.admin')

@section('content')
<button class="btn btn-primary mb-3" type="button" id="add-kategori" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Kategori</button>
<table class="table table-bordered">
	<thead>
		<th>No</th>
		<th>Nama</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		@foreach($data as $value)
		<tr>
			<td> {{ $loop->iteration }} </td>
			<td> {{ $value->name }} </td>
			<td>
				<a href="kategori/{{ $value->id }}" class="btn btn-sm btn-outline-primary"> <i class="fa fa-edit"></i> </a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Kategori Baru</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="post" action="kategoris">
					{{ csrf_field() }}
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Nama Kategori">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection