<h3>Tambah Kategori</h3>
<form method="POST" action="{{ route('kategori.store') }}">
@csrf
<input name="nama" placeholder="Nama" class="form-control mb-2">
<textarea name="deskripsi" placeholder="Deskripsi" class="form-control mb-2"></textarea>
<button class="btn btn-success">Simpan</button>
</form>
