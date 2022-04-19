<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Tambah Produk Baru</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Tambah Produk Baru</h1>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('produk.buat-data') }}" method="post">
                            @csrf
                            <div>
                                <input class="mt-3 form-control form-control-lg @error('judul') is-invalid @enderror" name="judul" type="text"
                                       placeholder="Judul" value="{{ old('judul') }}" >
                            </div>

                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('kategori') is-invalid @enderror" name="kategori" type="text"
                                       placeholder="Kategori" value="{{ old('kategori') }}" >
                            </div>

                            @error('kategori')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('harga') is-invalid @enderror" name="harga" type="text"
                                       placeholder="Harga" value="{{ old('harga') }}" >
                            </div>

                            @error('harga')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('stock') is-invalid @enderror" name="stock" type="text"
                                       placeholder="Stock" value="{{ old('stock') }}" >
                            </div>

                            @error('stock')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('penjual') is-invalid @enderror" name="penjual" type="text"
                                       placeholder="Penjual" value="{{ old('penjual') }}" >
                            </div>

                            @error('penjual')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </form>
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <button type="submit" class="btn btn-primary" form="form-login">Tambah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>
