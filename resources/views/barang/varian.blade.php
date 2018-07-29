@extends('template.admin')

@section('content')
<button class="btn btn-primary mb-3" type="button" id="add-kategori" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Varian</button>
<table class="table table-bordered">
	<thead>
		<th>No</th>
		<th>Nama Barang</th>
		<th>Nama Varian</th>
		<th>SKU</th>
		<th>Harga</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		@foreach($data as $value)
		<tr>
			<td> {{ $loop->iteration }} </td>
			<td> {{ $value->barang->name }} </td>
			<td> {{ $value->name }} </td>
			<td> {{ $value->sku }} </td>
			<td> {{ number_format($value->price) }} </td>
			<td>
				<a href="barang/{{ $value->id }}" class="btn btn-sm btn-outline-primary"> <i class="fa fa-edit"></i> </a>
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
				<h4 class="modal-title">Tambah Varian Barang Baru</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="post" action="varians">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name" class="control-label">Nama Varian</label>
						<input type="text" class="form-control" name="name" placeholder="Nama Barang">
					</div>
					<div class="form-group">
						<label class="control-label">Nama Barang</label>
						<select class="form-control" name="barang_id">
							@foreach($barang as $item)
							<option value="{{ $item->id }}">{{ $item->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label for="name" class="control-label">SKU</label>
						<input type="text" class="form-control" name="sku" placeholder="Nama Barang">
					</div>
					<div class="form-group">
						<label for="name" class="control-label">Harga</label>
						<input type="text" class="form-control" name="price" placeholder="Nama Barang">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" id="simpan-kategori">Save changes</button>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection