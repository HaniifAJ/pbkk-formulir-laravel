<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Formulir</h3>
                            <br/>

                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                             <!-- form validasi -->
                             <form action="/proses" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
                                            @error('nama')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nrp">NRP</label>
                                            <input class="form-control" type="text" name="nrp" value="{{ old('nrp') }}" class="@error('nrp') is-invalid @enderror">
                                            @error('nrp')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="jurusan">Jurusan</label>
                                               <input class="form-control" type="text" name="jurusan" value="{{ old('jurusan') }}" class="@error('jurusan') is-invalid @enderror">
                                                @error('jurusan')
                                                         <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                               <label for="usia">Usia</label>
                                               <input class="form-control" type="text" name="usia" value="{{ old('usia') }}" class="@error('usia') is-invalid @enderror">
                                               @error('usia')
                                                          <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                         </div>
                                         <div class="form-group">
                                            <label for="hobby">Hobby</label>
                                            <input class="form-control" type="text" name="hobby" value="{{ old('hobby') }}" class="@error('hobby') is-invalid @enderror">
                                            @error('hobby')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label" >Foto</label>
                                            <input class="form-control" type="file" id="formFile" name="foto" accept="image/*" onchange="loadFile(event)" class="@error('foto') is-invalid @enderror">
                                            @error('foto')
                                                       <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <img id="output"/>
                                            <script>
                                              var loadFile = function(event) {
                                                var output = document.getElementById('output');
                                                output.src = URL.createObjectURL(event.target.files[0]);
                                                output.onload = function() {
                                                  URL.revokeObjectURL(output.src) // free memory
                                                }
                                              };
                                            </script>
                                        </div>

                                        <div class="form-group">
                                               <input class="btn btn-primary" type="submit" value="Proses">
                                         </div>
                                </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>