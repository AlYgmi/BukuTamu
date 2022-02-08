<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/input.css') }}">
    <title>Update</title>
</head>

<body>
   <nav>
        <a href="{{ route('update') }}">
            <h1>UPDATE</h1>
        </a>
        <a class="btn-back" href="{{ route('index') }}"></a>
    </nav> 
    <header>
        <h1 class="h1_title" style align="center">UPDATE DATA</h1>
    </header>
    <div class="container">
        <form id="myform" action="{{ route('input') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="main">
                    <div class="col">
                        <strong>
                            <label for="nama">Nama</label>
                        </strong>
                    </div>
                    <div class="col_input">
                        <input name="nama" type="text" style="width: 100%; box-sizing: border-box" placeholder="nama lengkap" required />
                    </div>
                </div>
                <div class="main">
                    <div class="col">
                        <strong><label>Ambil foto</label></strong>
                    </div>
                    <div class="col_input">
                        <input id="nganu" type="hidden" name="profile" value="dsadsa"/>
                        <script src="{{ asset('js/webcam.js') }}"></script>
                        <div id="my_camera" style="width:320px; height:240px;"></div>
                        <div id="my_result"></div>
                        <script language="JavaScript" style="margin-bottom: 20px;">
                            Webcam.attach( '#my_camera' );
                            function take_snapshot() {
                                Webcam.snap( function(data_uri) {
                                    var raw_image_data = data_uri.replace("data:image/jpeg;base64,", ' ');
                                    console.log(data_uri)
                                    var leta = document.getElementById('my_result').innerHTML = '<img src="'+data_uri+'"/>';
                                             
                                    document.getElementById('nganu').value = raw_image_data; 
                                  
                                } );
                            }
                </script>
                <br>
                        <a style="font-weight: bold; background: #00C1D4; color: black; font-size: 10pt; width: auto; border: none; padding: 10px 20px; cursor: pointer; margin-top: 20; text-decoration: none;" href="javascript:void(take_snapshot())">Take Snapshot</a>
                    </div>
                </div>
                <div class="main">
                    <div class="col">
                        <strong><label for="alamat">Alamat lengkap</label></strong>
                    </div>
                    <div class="col_input">
                        <input name="alamat" type="text" style="width: 100% ; box-sizing: border-box;" placeholder="alamat" required/>
                    </div>
                </div>
                <div class="main">
                    <div class="col">
                        <strong><label for="tlp">Nomor Telepon</label></strong>
                    </div>
                    <div class="col_input">
                        <input name="tlp" type="text" style="width: 100%; box-sizing: border-box;" placeholder="nomor telepon" required />
                    </div>
                </div>
                <div class="main">
                    <div class="col">
                        <strong><label for="keterangan">Keterangan</label></strong>
                    </div>
                    <div class="col_input">
                        <textarea type="text" name="keterangan" class="textarea" placeholder="Keterangan" required /></textarea>
                    </div>
                </div>
                <div class="main">
                    <center>
                        <br>
                            <button class="btn_send" type="submit" name="updates">UPDATE</button>
                    </center>
                </div>
        </form>
    </div>
</body>
</html>