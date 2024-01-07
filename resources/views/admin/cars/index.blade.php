@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between aign-items-center">
            <h3>Daftar Mobil</h3>
            <a href="{{ route('create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class = "card-body">
            <div class ="table-responsive">
                 <table class ="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mobil</th>
                        <th>Gambar Mobil</th>
                        <th>Harga Sewa</th>
                        <th>Status Mobil</th>
                        <th>Aksi</th>
                    </tr>
                </thead>  
                <tbody>
                    @forelse($cars as $car)
                    <tr>
                        <td> {{ $loop->iteration}}</td>
                        <td> {{$car->nama_mobil }}</td>
                        <td>
                            <img src="{{ URL('frontend/assets/Mobil/' . $car->gambar . '') }}" width="200" alt="">
                        </td>
                        <td>Rp. {{number_format($car->harga_sewa, 0, ',' , '.')}}</td>
                        <td>{{$car->status}}</td>
                        <td>
                            <a href="{{route('edit', $car->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Data Kosong</td>
                    </tr>
                    @endforelse 
                </tbody>
                </table>    
            </div>
             </div>
        </div>
    </div>
@endsection