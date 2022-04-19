<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Game dan Studio Baru/Update</title>
    <script type="text/javascript">
        $(document).ready(function()
        {
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            //Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){ 
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });
            
            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
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
                        <h1 class="mt-3">Game dan Studio Baru/Update</h1>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('studio.buat-data') }}" method="post">
                            @csrf
                            <div>
                                <input class="mt-3 form-control form-control-lg @error('title') is-invalid @enderror" name="title" type="text"
                                       placeholder="Title" value="{{ old('title') }}" >
                            </div>

                            @error('title')
                            <div class="alert alert-danger">
                                Judul Game Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('deskripsi') is-invalid @enderror" name="deskripsi" type="text"
                                       placeholder="Deskripsi" value="{{ old('deskripsi') }}" >
                            </div>

                            @error('deskripsi')
                            <div class="alert alert-danger">
                                Deskripsi Game Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('tahun') is-invalid @enderror" name="tahun" type="text"
                                       placeholder="Tahun" value="{{ old('tahun') }}" >
                            </div>

                            @error('tahun')
                            <div class="alert alert-danger">
                                Tahun Rilis Game Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('genre') is-invalid @enderror" name="genre" type="text"
                                       placeholder="Genre" value="{{ old('genre') }}" >
                            </div>

                            @error('genre')
                            <div class="alert alert-danger">
                                Genre Game Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('code') is-invalid @enderror" name="code" type="text"
                                       placeholder="Studio Code" value="{{ old('code') }}" >
                            </div>

                            @error('code')
                            <div class="alert alert-danger">
                                Kode Studio Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('name') is-invalid @enderror" name="name" type="text"
                                       placeholder="Studio Name" value="{{ old('name') }}" >
                            </div>

                            @error('name')
                            <div class="alert alert-danger">
                                Nama Studio Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('address') is-invalid @enderror" name="address" type="text"
                                       placeholder="Studio Address" value="{{ old('address') }}" >
                            </div>

                            @error('address')
                            <div class="alert alert-danger">
                                Alamat Studio Salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('specialty') is-invalid @enderror" name="specialty" type="text"
                                       placeholder="Studio Specialty" value="{{ old('specialty') }}" >
                            </div>

                            @error('specialty')
                            <div class="alert alert-danger">
                                Spesialisasi Studio Salah
                            </div>
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
