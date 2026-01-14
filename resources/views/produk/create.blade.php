<h3>Tambah Produk</h3>
<form method="POST" action="{{ route('produk.store') }}">
@csrf

<select name="kategori_id" class="form-control mb-2">
@foreach($kategoris as $k)
<option value="{{ $k->id }}">{{ $k->nama }}</option>
@endforeach
</select>

<input name="nama" class="form-control mb-2" placeholder="Nama Produk">
<input name="stok" type="number" class="form-control mb-2" placeholder="Stok">
<input name="harga" type="number" class="form-control mb-2" placeholder="Harga">

<button class="btn btn-success">Simpan</button>
</form>
