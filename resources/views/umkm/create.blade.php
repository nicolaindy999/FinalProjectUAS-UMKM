@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Buat UMKM Baru</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Buat UMKM Baru</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Formulir UMKM Baru</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('umkm.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="modal">Modal</label>
                            <input type="number" name="modal" id="modal" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pemilik">Pemilik</label>
                            <input type="text" name="pemilik" id="pemilik" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" name="website" id="website" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="kabkota_id">Kabkota ID</label>
                            <input type="number" name="kabkota_id" id="kabkota_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="number" name="rating" id="rating" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kategori_umkm_id">Kategori UMKM ID</label>
                            <input type="number" name="kategori_umkm_id" id="kategori_umkm_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="pembina_id">Pembina ID</label>
                            <input type="number" name="pembina_id" id="pembina_id" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="foto">link foto</label>
                            <input type="text" name="foto" id="foto" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
                    Footer
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
</div>
    </div>
</div>

@include('admin.footer')
