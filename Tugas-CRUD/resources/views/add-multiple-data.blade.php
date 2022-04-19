<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah Game Multiple</title>
    <script type="text/javascript">
        $(document).ready(function()
        {
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '\
                                <div><div>\
                                    <input class="mt-3 form-control form-control-lg @error('title') is-invalid @enderror" name="title[]" type="text"\
                                           placeholder="Title" value="{{ old('title') }}" >\
                                </div>\
                                @error('title')\
                                <div class="alert alert-danger">\
                                    Judul Game Salah\
                                </div>\
                                @enderror\
                                <div>\
                                    <input class="mt-3 form-control form-control-lg @error('deskripsi') is-invalid @enderror" name="deskripsi[]" type="text"\
                                           placeholder="Deskripsi" value="{{ old('deskripsi') }}" >\
                                </div>\
                                @error('deskripsi')\
                                <div class="alert alert-danger">\
                                    Deskripsi Game Salah\
                                </div>\
                                @enderror\
                                <div>\
                                    <input class="mt-3 form-control form-control-lg @error('tahun') is-invalid @enderror" name="tahun[]" type="text"\
                                           placeholder="Tahun" value="{{ old('tahun') }}" >\
                                </div>\
                                @error('tahun')\
                                <div class="alert alert-danger">\
                                    Tahun Rilis Game Salah\
                                </div>\
                                @enderror\
                                <div>\
                                    <input class="mt-3 form-control form-control-lg @error('genre') is-invalid @enderror" name="genre[]" type="text"\
                                           placeholder="Genre" value="{{ old('genre') }}" >\
                                </div>\
                                @error('genre')\
                                <div class="alert alert-danger">\
                                    Genre Game Salah\
                                </div>\
                                @enderror\
                                <div>\
                                    <input class="mt-3 form-control form-control-lg @error('id') is-invalid @enderror" name="id[]" type="text"\
                                           placeholder="ID Studio" value="{{ old('id') }}" >\
                                </div>\
                                @error('id')\
                                <div class="alert alert-danger">\
                                    ID Studio Salah\
                                </div>\
                                @enderror\
                                <a href="javascript:void(0);" class="remove_button" title="Add field"><img src="{{ asset('img/remove-icon.png') }}"/></a>\
                            </div>';
            var x = 1;
            $(addButton).click(function(){
                console.log("nambah");
                if(x < maxField){ 
                    x++;
                    $(wrapper).append(fieldHTML);
                }
            });
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });
        });
    </script>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Tambah Game Multiple</h1>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('studio.buat-multi') }}" method="post">
                            @csrf
                            <div class="field_wrapper">
                                <div>
                                    <input class="mt-3 form-control form-control-lg @error('title') is-invalid @enderror" name="title[]" type="text"
                                           placeholder="Title" value="{{ old('title') }}" >
                                </div>
                                @error('title')
                                <div class="alert alert-danger">
                                    Judul Game Salah
                                </div>
                                @enderror
                                <div>
                                    <input class="mt-3 form-control form-control-lg @error('deskripsi') is-invalid @enderror" name="deskripsi[]" type="text"
                                           placeholder="Deskripsi" value="{{ old('deskripsi') }}" >
                                </div>
                                @error('deskripsi')
                                <div class="alert alert-danger">
                                    Deskripsi Game Salah
                                </div>
                                @enderror
                                <div>
                                    <input class="mt-3 form-control form-control-lg @error('tahun') is-invalid @enderror" name="tahun[]" type="text"
                                           placeholder="Tahun" value="{{ old('tahun') }}" >
                                </div>
                                @error('tahun')
                                <div class="alert alert-danger">
                                    Tahun Rilis Game Salah
                                </div>
                                @enderror
                                <div>
                                    <input class="mt-3 form-control form-control-lg @error('genre') is-invalid @enderror" name="genre[]" type="text"
                                           placeholder="Genre" value="{{ old('genre') }}" >
                                </div>
                                @error('genre')
                                <div class="alert alert-danger">
                                    Genre Game Salah
                                </div>
                                @enderror
                                <div>
                                    <input class="mt-3 form-control form-control-lg @error('id') is-invalid @enderror" name="id[]" type="text"
                                           placeholder="ID Studio" value="{{ old('id') }}" >
                                </div>
                                @error('id')
                                <div class="alert alert-danger">
                                    ID Studio Salah
                                </div>
                                @enderror
                                <a href="javascript:void(0);" class="add_button" title="Add field"><img src="{{ asset('img/add-icon.png') }}"/></a>
                            </div>
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
