<h3>Edit Kategori</h3>
<form method="POST" action="{{ route('kategori.update',$kategori->id) }}">
@csrf
@method('PUT')
<input name="nama" class="form-control mb-2" value="{{ $kategori->nama }}">
<textarea name="deskripsi" class="form-control mb-2">{{ $kategori->deskripsi }}</textarea>
<button class="btn btn-primary">Update</button>
</form>
