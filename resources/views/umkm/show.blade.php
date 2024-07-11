@include('admin.header')
@include('admin.sidebar')
<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar umkm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">umkm</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
<div class="container">
    <h1>Detail UMKM</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $umkm->id }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $umkm->nama }}</td>
        </tr>
        <tr>
            <th>Modal</th>
            <td>{{ $umkm->modal }}</td>
        </tr>
        <tr>
            <th>Pemilik</th>
            <td>{{ $umkm->pemilik }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $umkm->alamat }}</td>
        </tr>
        <tr>
            <th>Website</th>
            <td>{{ $umkm->website }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $umkm->email }}</td>
        </tr>
        <tr>
            <th>Kabupaten/Kota ID</th>
            <td>{{ $umkm->kabkota_id }}</td>
        </tr>
        <tr>
            <th>Rating</th>
            <td>{{ $umkm->rating }}</td>
        </tr>
        <tr>
            <th>Kategori UMKM ID</th>
            <td>{{ $umkm->kategori_umkm_id }}</td>
        </tr>
        <tr>
            <th>Pembina ID</th>
            <td>{{ $umkm->pembina_id }}</td>
        </tr>
        <tr>
            <th>foto</th>
            <td>{{ $umkm->foto }}</td>
        </tr>
    </table>
    
    <a href="{{ route('umkm.index') }}" class="btn btn-secondary">Kembali</a>
    <a href="{{ route('umkm.edit', $umkm->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('umkm.destroy', $umkm->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>
@include('admin.footer')
