@include('admin.header')
<div class="container">
    <h1 class="my-4">Edit UMKM</h1>
    <form action="{{ route('umkm.update', $umkm->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $umkm->nama }}" required>
        </div>
        <div class="form-group">
            <label for="modal">Modal:</label>
            <input type="number" class="form-control" id="modal" name="modal" value="{{ $umkm->modal }}">
        </div>
        <div class="form-group">
            <label for="pemilik">Pemilik:</label>
            <input type="text" class="form-control" id="pemilik" name="pemilik" value="{{ $umkm->pemilik }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $umkm->alamat }}" required>
        </div>
        <div class="form-group">
            <label for="website">Website:</label>
            <input type="text" class="form-control" id="website" name="website" value="{{ $umkm->website }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $umkm->email }}" required>
        </div>
        <div class="form-group">
            <label for="kabkota_id">Kabkota ID:</label>
            <input type="number" class="form-control" id="kabkota_id" name="kabkota_id" value="{{ $umkm->kabkota_id }}" required>
        </div>
        <div class="form-group">
            <label for="rating">Rating:</label>
            <input type="number" class="form-control" id="rating" name="rating" value="{{ $umkm->rating }}">
        </div>
        <div class="form-group">
            <label for="kategori_umkm_id">Kategori UMKM ID:</label>
            <input type="number" class="form-control" id="kategori_umkm_id" name="kategori_umkm_id" value="{{ $umkm->kategori_umkm_id }}" required>
        </div>
        <div class="form-group">
            <label for="pembina_id">Pembina ID:</label>
            <input type="number" class="form-control" id="pembina_id" name="pembina_id" value="{{ $umkm->pembina_id }}" required>
        </div>
        <div class="form-group">
            <label for="foto">foto:</label>
            <input type="text" class="form-control" id="foto" name="foto" value="{{ $umkm->foto }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@include('admin.footer')
