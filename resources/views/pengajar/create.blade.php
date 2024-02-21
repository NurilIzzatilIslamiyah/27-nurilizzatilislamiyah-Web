<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengajar - Tryout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pengajar.store') }}" method="POST" enctype="multipart/form-data">
                            <a href="{{ route('pengajar.index') }}" class="btn btn-md btn-success mb-3">KEMBALI</a>

                            @csrf

                            <div class="form-group">
                                <label for="exampleDropdown" class="font-weight-bold">GURU</label>
                                <select name="id_guru" class="form-control" id="exampleDropdown">
                                   @foreach ($guru as $item)
                                   <option value="{{$item->id}}">{{$item->nama}}</option>
                                   @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleDropdown" class="font-weight-bold">MAPEL</label>
                                <select name="id_mapel" class="form-control" id="exampleDropdown">
                                   @foreach ($mapel as $item)
                                   <option value="{{$item->id}}">{{$item->nama_mapel}}</option>
                                   @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <!-- error message untuk title -->
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label for="exampleDropdown" class="font-weight-bold">KELAS</label>
                                    <select name="kelas" class="form-control" id="exampleDropdown">
                                        <option value="XII - PPLG">XII - PPLG</option>
                                        <option value="XII - DKV">XII DKV</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <!-- error message untuk title -->
                                    @error('jam_pelajaran')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleDropdown" class="font-weight-bold">JAM PELAJARAN</label>
                                        <select name="jam_pelajaran" class="form-control" id="exampleDropdown">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>
