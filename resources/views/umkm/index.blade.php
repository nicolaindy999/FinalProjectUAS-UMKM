@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Daftar UMKM</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar UMKM</h3>
        
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    
                    <a href="{{ route('umkm.create') }}" class="btn btn-primary">Tambah UMKM</a>
                    <table class="table table-bordered">
                    <thead>
                         <tr>
                        <th>ID</th>
                       <th>Nama</th>
                       <th>Modal</th>
                       <th>Pemilik</th>
                       <th>Alamat</th>
                       <th>Website</th>
                       <th>Email</th>
                       <th>Kabkota ID</th>
                       <th>Rating</th>
                    <th>Kategori UMKM ID</th>
                      <th>Pembina ID</th>
                         <th>Aksi</th>
                           </tr>
                          </thead>
                        <tbody>
                            @foreach ($list_umkm as $umkm)
                            <tr>
            <td>{{ $umkm->id }}</td>
            <td>{{ $umkm->nama }}</td>
            <td>{{ $umkm->modal }}</td>
            <td>{{ $umkm->pemilik }}</td>
            <td>{{ $umkm->alamat }}</td>
            <td>{{ $umkm->website }}</td>
            <td>{{ $umkm->email }}</td>
            <td>{{ $umkm->kabkota_id }}</td>
            <td>{{ $umkm->rating }}</td>
            <td>{{ $umkm->kategori_umkm_id }}</td>
            <td>{{ $umkm->pembina_id }}</td>
            <td>
                <a href="{{ route('umkm.show', $umkm->id) }}" class="btn btn-primary">Read</a>
                <a href="{{ route('umkm.edit', $umkm->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('umkm.destroy', $umkm->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
