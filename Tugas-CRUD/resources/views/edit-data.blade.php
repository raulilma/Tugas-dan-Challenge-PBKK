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
    <title>Edit Game</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Edit Game</h1>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('studio.update', $data->id) }}" method="post" onsubmit="return confirm('Apakah Anda Yakin Edit Data ?');">
                            @csrf

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('title') is-invalid @enderror" name="title" type="text"
                                       placeholder="Title" value="{{ old('title', $data->title ? $data->title : 'Tidak Ada Data') }}" autofocus required>
                            </div>

                            @error('title')
                            <div class="alert alert-danger">
                                Title Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('deskripsi') is-invalid @enderror" name="deskripsi" type="text"
                                       placeholder="Deskripsi" value="{{ $data->deskripsi ? $data->deskripsi : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('deskripsi')
                            <div class="alert alert-danger">
                                Deskripsi Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('tahun') is-invalid @enderror" name="tahun" type="text"
                                       placeholder="Tahun" value="{{ $data->tahun ? $data->tahun : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('tahun')
                            <div class="alert alert-danger">
                                Tahun Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('genre') is-invalid @enderror" name="genre" type="text"
                                       placeholder="Genre" value="{{ $data->genre ? $data->genre : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('genre')
                            <div class="alert alert-danger">
                                Genre Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('code') is-invalid @enderror" name="code" type="text"
                                       placeholder="Code" value="{{ $data->studio->code ? $data->studio->code : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('code')
                            <div class="alert alert-danger">
                                Kode Studio Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('name') is-invalid @enderror" name="name" type="text"
                                       placeholder="Name" value="{{ $data->studio->name ? $data->studio->name : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('name')
                            <div class="alert alert-danger">
                                Nama Studio Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('address') is-invalid @enderror" name="address" type="text"
                                       placeholder="Address" value="{{ $data->studio->address ? $data->studio->address : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('address')
                            <div class="alert alert-danger">
                                Alamat Studio Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('specialty') is-invalid @enderror" name="specialty" type="text"
                                       placeholder="Specialty" value="{{ $data->studio->specialty ? $data->studio->specialty : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('specialty')
                            <div class="alert alert-danger">
                                Spesialisasi Studio Salah
                            </div>
                            @enderror
                        </form>
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <a href="{{ route('home') }}" class="btn btn-secondary" onclick="return confirm('Apakah Anda Yakin Kembali ke Halaman Utama ?');">Kembali</a>
                            <button type="submit" class="btn btn-primary" form="form-login">Edit Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>
