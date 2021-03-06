<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Material | SOC Asesores</title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ab58011517.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45234464-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-45234464-2');
    </script>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKHVJF4"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45234464-2"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
      
          gtag('config', 'UA-45234464-2');
      </script>
      
    <div id="app">
        <header class="bg-light fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                          <a class="navbar-brand" href="{{url('/')}}">
                            <img src="{{ url('img/soc.jpg') }}" width="150" class="d-inline-block align-top" alt="">
                          </a>
                          <div class="form-inline ml-auto" style="width: 100%;">
                            <input class="form-control m-auto" type="search" placeholder="Buscar" id="search" aria-label="Search">
                            @if (Auth::check() && Auth::user()->role == 0)
                                <a data-toggle="modal" data-target="#exampleModal2" class="add-button"><i class="fas fa-plus-circle"></i>Agregar Carpeta</a>
                                <a data-toggle="modal" data-target="#exampleModal" class="add-button"><i class="fas fa-plus-circle"></i>Agregar Material</a>
                            @else
                              <a href="https://forms.gle/DtFY17W8MRj55hHv7" target="_blank" class="add-button">Solicitud de dise??o</a>
                            @endif
                          </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                      <a href="#" class="button-help-2"><img src="{{url('/')}}/img/help.png" alt=""></a>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                              <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}/identidad">Imagen Corporativa</a>
                              </li>
                              <li class="nav-item dropdown drop-menu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  L??neas de negocio
                                </a>
                                <div class="dropdown-menu dropdown-content drop-sub-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{url('/')}}/linea/hipotecario">Hipotecario</a>
                                  <a class="dropdown-item" href="{{url('/')}}/linea/empresarial">Empresarial</a>
                                  <a class="dropdown-item" href="{{url('/')}}/linea/seguros">Seguros</a>
                                </div>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}/herramientas">Herramientas</a>
                              </li>
                              <li class="nav-item dropdown drop-menu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Contenido de difusi??n
                                </a>
                                <div class="dropdown-menu dropdown-content dropdown drop-sub-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{url('/')}}/difusion/hipotecario">Hipotecario</a>
                                  <a class="dropdown-item" href="{{url('/')}}/difusion/empresarial">Empresarial</a>
                                  <a class="dropdown-item" href="{{url('/')}}/difusion/seguros">Seguros</a>
                                </div>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}/eventos">Eventos</a>
                              </li>
                              <li>
                                <a href="" class="add-button-2" target="_blank" data-toggle="modal" data-target="#solicitud_modal">Tarjeta y firma digital</a>
                              </li>
                              <li>
                                <a href="#" class="button-help"><img src="{{url('/')}}/img/help.png" alt=""></a>
                              </li>
                              
                            </ul>
                          </div>
                        </nav>
                    </div>
                </div>
                <div class="modal-contact">
                  <p class="text-center mb-2"><b>??En qu?? podemos ayudarte?</b></p>
                  <p>Manda un correo a:</p>
                  <a href="mailto:luishernandez@socasesores.com,acid@socasesores.com">Soporte t??cnico y UX</a><br>
                  <a href="mailto:dgarcia@socasesores.com">Desarrollo de contenido</a>
                </div>
            </div>
        </header>


        <main>
            @yield('content')
        </main>
        <!-- Modal -->
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header" style="border: 0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Agrega la siguiente informaci??n</p>
                <form id="multi-file-upload-ajax" method="post" action="{{url('insert')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" id="name" name="nombre" placeholder="Nombre">
                    <label for="files" id="file_label">Archivos a subir</label>
                    <input type="file" name="filenames[]" id="files" placeholder="Choose files" multiple hidden>
                    <select name="categoria_padre" id="category_padre">
                        <option value="" selected hidden>Guardar en</option>
                         @foreach($folders as $folder)
                          <option value="{{ $folder->slug }}" parent="">{{ $folder->name }}</option>
                        @endforeach
                    </select>
                    <select name="categoria" id="category" class="d-none">
                        
                    </select>
                    <input type="hidden" value="url({{ url('img/registros') }}" id="base_registro">
                    <input type="hidden" value="url({{ url('archivos') }}" id="base_imagen">
                    <textarea name="descripcion" cols="30" rows="7" placeholder="Descripcion" id="description"></textarea>
                    <input type="submit" value="Guardar">
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <!-- Modal -->
        <div class="modal" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header" style="border: 0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Agrega la siguiente informaci??n</p>
                <form id="multi-file-upload-ajax_2" method="post" action="{{url('insertFolder')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="nombre" placeholder="Nombre">
                    <label for="files_2" id="file_label">Imagen de Carpeta</label>
                    <input type="file" name="files_2" id="files_2" placeholder="Choose files" hidden>
                    <input type="text" name="category_up" value="" id="category_up" hidden>
                    <select name="categoria_padre" id="category_padre_2">
                        <option value="" selected hidden>Guardar en</option>
                         @foreach($folders as $folder)
                          <option value="{{ $folder->slug }}" parent="">{{ $folder->name }}</option>
                        @endforeach
                    </select>
                    <select name="categoria" id="category_2" class="d-none">
                        
                    </select>
                    <input type="submit" value="Guardar">
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal" id="solicitud_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header justify-content-center">
                <h5 class="modal-title text-center" id="exampleModalLabel">??Cuentas con certificaci??n de Oficina Plata, Oro o Diamante con SOC? </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-center">
                <a href="https://forms.gle/JuUnJ2inFYL97FsR7" target="_blank" class="btn btn-info mr-4">Si</a>
                <a href="{{route('idenditadPresentacion')}}" class="btn btn-info">No</a>
              </div>
            </div>
          </div>
        </div>
        <footer></footer>
    </div>
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ url('js/main.js') }}"></script>
    <script>
        $('#search').keypress(function (e) {
         var key = e.which;
         if(key == 13)  // the enter key code
          {
            window.open('{{url('/')}}/search/'+$('#search').val(), '_parent'); 
          }
        }); 
    $(".registro_id").click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        var base = $(this).attr('base');
        $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{url('registro')}}",
                type: 'POST',
                data: {
                    id: id,
                },
                success: function(response){
                    var date = formatDate(response['registros'][0].created_at);
                    var archivos = [];
                    $.each(response['archivos'], function(index, val) {
                        archivos.push(val.url);
                    });
                    $(".title").html(response['registros'][0].nombre);
                    $(".image_registro").attr("src",base+response['registros'][0].imagen);
                    $(".description").html(response['registros'][0].descripcion);
                    $("#facebook").attr("href","https://www.facebook.com/sharer/sharer.php?u=https://socasesores.com/material/public/archivo/"+response['registros'][0].url);
                    $("#twitter").attr("href","https://twitter.com/intent/tweet?url=https://socasesores.com/material/public/"+response['registros'][0].url+"&text=");
                    $("#linkedin").attr("href","https://www.linkedin.com/shareArticle?mini=true&url=https://socasesores.com/material/public/archivo/"+response['registros'][0].url);
                    $(".copy").attr("href","{{url('/')}}/carpeta/"+response['registros'][0].url);
                    $(".date span").html(date);
                    $(".info span").html(response['count']);
                    $(".delete").attr("id",response['registros'][0].id);
                    $(".open").attr("href","{{url('/')}}"+"/registro/"+response['registros'][0].url);
                    $(".registro-section").removeClass('hide');
                }
        });
    });

    $(".delete").click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{url('delete')}}",
                type: 'POST',
                data: {
                    id: id,
                },
                success: function(response){
                    alert("Carpeta eliminada");
                   window.open('{{url('/')}}','_parent'); 
                }
        });
    });

    $(".delete-file").click(function(e){
        e.preventDefault();
        text = window.location.href;
        var id = $(this).attr('id');
        $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{url('delete_file')}}",
                type: 'POST',
                data: {
                    id: id,
                },
                success: function(response){
                    alert("Archivo eliminado");
                   window.open(text,'_parent'); 
                }
        });
    });

    function formatDate(date) {
         var d = new Date(date),
             month = '' + (d.getMonth() + 1),
             day = '' + d.getDate(),
             year = d.getFullYear();

         if (month.length < 2) month = '0' + month;
         if (day.length < 2) day = '0' + day;

         return [year, month, day].join('-');
    }


    $('#category_padre').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        switch (valueSelected) { 
        @foreach($folders as $folder)
          case '{{ $folder->slug }}': 
            $("#category").html("");
             $("#category").removeClass("d-none");
           
              @php
                $folder_childs = getFolders($folder->id)
              @endphp
              @foreach($folder_childs as $folder_child)
                $('#category').append(`<option value="{{ $folder_child->slug }}">{{ $folder_child->name }}</option>`);
           
                @endforeach
            break;
        @endforeach
        default:
            $("#category").html("");
    }
    });

    $('#category_padre_2').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        $('#category_up').val(valueSelected);
        $('#category_2').append('<option value="'+valueSelected+'" selected hidden></option>');
        switch (valueSelected) { 
        @foreach($folders as $folder)
          case '{{ $folder->slug }}': 
            $("#category_2").html("");
             $("#category_2").removeClass("d-none");
           
              @php
                $folder_childs = getFolders($folder->id)
              @endphp
              @foreach($folder_childs as $folder_child)
                $('#category_2').append(`<option value="{{ $folder_child->slug }}">{{ $folder_child->name }}</option>`);
           
                @endforeach
            break;
        @endforeach
        default:
            $("#category").html("");
    }
    });

    $('#category').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        var nameSelected = $(this).find('option:selected').text();

            $("#category").html("");

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{route('checkFolder')}}",
                type: 'POST',
                data: {
                    folder: valueSelected,
                },
                success: function(response){
                    $('#category_padre').append('<option value="'+valueSelected+'" selected>'+nameSelected+'</option>');
                        $('#category').append('<option value="'+valueSelected+'" selected hidden></option>');
                         $.each(response, function(index, val) {
                            
                            $('#category').append('<option value="'+val["slug"]+'">'+nameSelected+" - "+val["name"]+'</option>');
                        });
                    
                    
                },
                error: function(xhr, textStatus, error) {
                    console.log(xhr.responseText);
                    console.log(xhr.statusText);
                    console.log(textStatus);
                    console.log(error);
                }
            });
           
    
    });

    $('#category_2').on('change', function (e) {
        var optionSelected = $("option:selected", this);
        var valueSelected = this.value;
        var nameSelected = $(this).find('option:selected').text();

            $("#category_2").html("");

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{route('checkFolder')}}",
                type: 'POST',
                data: {
                    folder: valueSelected,
                },
                success: function(response){
                  console.log(response);
                    $('#category_padre_2').append('<option value="'+valueSelected+'" selected>'+nameSelected+'</option>');
                    $('#category_up').val(valueSelected);
                   
                        $('#category_2').append('<option value="'+valueSelected+'" selected hidden></option>');
                         $.each(response, function(index, val) {
                            
                            $('#category_2').append('<option value="'+val["slug"]+'">'+nameSelected+" - "+val["name"]+'</option>');
                        });
                    
                    
                },
                error: function(xhr, textStatus, error) {
                    console.log(xhr.responseText);
                    console.log(xhr.statusText);
                    console.log(textStatus);
                    console.log(error);
                }
            });
           
    
    });
    $(".archivo_id").click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        var base = $(this).attr('base');
        $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{url('archivo')}}",
                type: 'POST',
                data: {
                    id: id,
                },
                success: function(response){
                    var archivos = [];
                    $.each(response['archivos'], function(index, val) {
                        archivos.push(val.url);
                    });
                    $(".title span").html(response['archivos'][0].nombre);
                    $(".edit_name").val(response['archivos'][0].nombre);
                    $("#edit_id").val(response['archivos'][0].id);
                    $(".description").html(response['archivos'][0].descripcion);
                    $(".image_registro").attr("src",base+response['archivos'][0].imagen);
                    $("#facebook").attr("href","https://www.facebook.com/sharer/sharer.php?u=https://socasesores.com/material/public/archivos/"+response['archivos'][0].imagen);
                    $("#twitter").attr("href","https://twitter.com/intent/tweet?url=https://socasesores.com/material/public/archivos/"+response['archivos'][0].imagen+"&text=");
                    $("#linkedin").attr("href","https://www.linkedin.com/shareArticle?mini=true&url=https://socasesores.com/material/public/archivos/"+response['archivos'][0].imagen);
                    $("#whatsapp").attr("href","https://web.whatsapp.com/send?text=https://socasesores.com/material/public/archivos/"+response['archivos'][0].imagen);
                    $("#mailto").attr("href","mailto:body=https://socasesores.com/material/public/archivos/"+response['archivos'][0].imagen);
                    $(".copy").attr("href","https://socasesores.com/material/public/archivos/"+response['archivos'][0].imagen);
                    $(".delete-file").attr("id",response['archivos'][0].id);
                    $(".download").attr("files",response['archivos'][0].imagen);
                    $(".registro-section").removeClass('hide');
                }
        });
    });
    $(".change-folder-link").click(function(e){
      e.preventDefault();
      $(".change-folder").toggleClass("d-none");
      $(".edit_name").addClass("d-none");
      $(".title").addClass("d-none");
      $(".save-changes").removeClass("d-none");
    });
    $(".change-name").click(function(e){
      e.preventDefault();
      $(".change-folder").addClass("d-none");
      $(".edit_name").toggleClass("d-none");
      $(".title").toggleClass("d-none");
      $(".save-changes").removeClass("d-none");
    });
    $(".change-name_titulo").click(function(e){
      e.preventDefault();
      $(".edit_name_titulo").toggleClass("d-none");
      $(".save-changes-folder").toggleClass("d-none");
    });
    $(".save-changes").click(function(e){
      e.preventDefault();
      var name = $(".edit_name").val();
      var id = $("#edit_id").val();
      var folder = $(".category_change").val();

      $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{route('saveName')}}",
                type: 'POST',
                data: {
                    id: id,
                    name: name,
                    folder: folder
                },
                success: function(response){
                   if (response === "suceess") {
                    $(".title span").html(name);
                   }
                },
                error: function(xhr, textStatus, error) {
                    console.log(xhr.responseText);
                    console.log(xhr.statusText);
                    console.log(textStatus);
                    console.log(error);
                }
        });
    });

    $(".save-changes-folder").click(function(e){
      e.preventDefault();
      var name = $(".edit_name_titulo").val();
      var id = $("#id_titulo").val();

      $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: "{{route('saveNameFolder')}}",
                type: 'POST',
                data: {
                    id: id,
                    name: name
                },
                success: function(response){
                   if (response === "suceess") {
                    $(".titulo-categoria").html(name);
                   }
                },
                error: function(xhr, textStatus, error) {
                    console.log(xhr.responseText);
                    console.log(xhr.statusText);
                    console.log(textStatus);
                    console.log(error);
                }
        });
    });
    </script>
</html>
