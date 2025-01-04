<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Cv Builder</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="{{asset('backend/css/simplebar.css')}}">
  <!-- Fonts CSS -->
  <link
    href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="{{asset('backend/css/feather.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/select2.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/dropzone.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/uppy.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/jquery.steps.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/jquery.timepicker.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/quill.snow.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/toastr.css')}}">
  <link rel="stylesheet" href="{{asset('backend/css/dataTables.bootstrap4.css')}}">

  <link rel="stylesheet" href="{{asset('backend/bootstrap-tagsinput.css')}}">
 
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="{{asset('backend/css/daterangepicker.css')}}">
  <!-- App CSS -->
  <link rel="stylesheet" href="{{asset('backend/css/app-light.css')}}" id="lightTheme">
  <link rel="stylesheet" href="{{asset('backend/css/app-dark.css')}}" id="darkTheme" disabled>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
  integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;

    }

    body {
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        position: relative;
        width: 100%;
        max-width: 1000px;
        min-height: 1000px;
        background: #fff;
        margin: 50px;
        display: grid;
        grid-template-columns: 1fr 2fr;
        box-shadow: 0 35px 55px rgba(211, 68, 68, 0.1);
    }

    .container .left_Side {
        position: #fff;
        background: #fff;
        padding: 40px;
    }

    .profileText {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(179, 46, 46, 0.2);
    }

    .profileText .imgBx {
        position: relative;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;

    }

    .profileText .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profileText h2 {
        color: black;
        font-size: 1.5em;
        margin-top: 20px;
        text-transform: uppercase;
        text-align: center;
        font-weight: 600;
        line-height: 1.4em;
    }

    .profileText h2 span {
        font-size: 0.8em;
        font-style: 300;
    }

    .contactInfo {
        padding-top: 40px;
    }

    .title {
        color: black;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 20px;

    }

    .contactInfo ul {
        position: relative;
    }

    .contactInfo ul li {
        position: relative;
        list-style: none;
        margin: 10px 0;
        cursor: pointer;
    }

    .contactInfo ul li .icon {
        display: inline-block;
        width: 30px;
        font-size: 18px;
        color: #e37b7d;
    }

    .contactInfo ul li span {
        color: black;
        font-weight: 300;
    }

    .contactInfo.education li {
        margin-bottom: 15px;

    }

    .contactInfo.education h5 {
        color: black;
        font-weight: 500;
    }

    .contactInfo.education h4 {
        color: black;
        font-weight: 500;
    }

    .contactInfo.education h4:nth-child(2) {
        color: black;
        font-weight: 300;
    }

    .contactInfo.language .percent {
        position: relative;
        width: 100%;
        height: 6px;
        background: #fff;
        display: block;
        margin-top: 5px;
    }

    .contactInfo.language .percent div {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background: #fff;
    }

    .container .right_Side {
        position: relative;
        background: #fff;
        padding: 40px;
    }

    .about {
        margin-bottom: 50px;

    }

    .about:last-child {
        margin-bottom: 0;
    }

    .title2 {
        color: #003147;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }

    p {
        color: #333;
    }

    .about .box {
        display: flex;
        flex-direction: row;
        margin: 20px 0;
    }

    .about .box .year_company {
        min-width: 150px;
    }

    .about .box .year_company h5 {
        text-transform: uppercase;
        color: #848c90;
        font-weight: 600;
    }

    .about .box .text h4 {
        text-transform: uppercase;
        color: rgb(148, 8, 8);
        font-size: 16px;
    }

    .skills .box {
        position: relative;
        width: 100%;
        display: grid;
        grid-template-columns: 150px 1fr;
        justify-content: center;
        align-items: center;
    }

    .skills .box h4 {
        text-transform: uppercase;
        color: #848c99;
        font-weight: 500;

    }

    .skills .box .percent {
        position: relative;
        width: 100%;
        height: 10px;
        background: #c1baba;
    }

    .skills .box .percent div {
        position: absolute;
        top: 0;
        left: 00;
        height: 100%;
        background: rgb(148, 8, 8);
    }

    .interest ul {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    .interest ul li {
        list-style: none;
        color: #333;
        font-weight: 500;
        margin: 10px 0;
    }

    .interest ul li .fa {
        color: #800b0d;
        font-size: 18px;
        width: 20px;
    }

    .contactInfo language {
        color: black;
    }
</style>
</head>

<body class="vertical  light  ">
  <div class="wrapper">
     @include('backend.include.header')
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
      <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
      </a>
      @include('backend.include.sidebar')
    </aside>
    <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-danger" href="{{route('downloadcv')}}"><i class="fa fa-download"></i></a>
                          </div>
              <div class="row">

                
                <div class="container">
                    <div class="left_Side">
                        <div class="profileText">
                            @php
                            $image= App\Models\Image::where('user_id',Auth::user()->id)->first();
                        @endphp
                            <div class="imgBx">
                           
                                <img src="{{$image->img}}">
                            </div>
                            @php
                            $info= App\Models\Info::where('user_id',Auth::user()->id)->first();
                        @endphp
                            <h2>{{$info->name}}<br><span>{{$info->name}}</span></h2>
                        </div>
                        <div class="contactInfo">
                            <h3 class="title">Contact Info</h3>
                            <ul>
                                <li>
                                    <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <span class="text">{{$info->phone}}</span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <span class="text">{{$info->email}}</span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                    <span class="text">mywebsite.com</span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                    <span class="text">www.linkedin.com</span>
                                </li>
                                <li>
                                    <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <span class="text">{{$info->address}}</span>
                                </li>
                            </ul>
                        </div>
                        @php
                            $edu= App\Models\Education::where('user_id',Auth::user()->id)->first();
                        @endphp
                        <div class="contactInfo education">
                            <h3 class="title">EDUCATION</h3>
                            <ul>
                                <li>
                                    <h5>{{$edu->startdate}}-{{$edu->enddate}}</h5>
                                    <h4>{{$edu->desc}}</h4>
                                    <h4>{{$edu->edu_name}} </h4>
                                </li>
                                <li>
                                    <h5>2019 - 2021</h5>
                                    <h4> Intermediate in Maths</h4>
                                    <h4>College Name</h4>
                                </li>
                                <li>
                                    <h5>2021 - Now</h5>
                                    <h4>Undergraduate in Computer Science</h4>
                                    <h4>University Name</h4>
                                </li>
                            </ul>
                        </div>
            
                        <br>
                        <br>
                        @php
                        $lang= App\Models\Language::where('user_id',Auth::user()->id)->first();
                    @endphp
                        <div class="contactInfo education">
                            <h3 class="title">LANGUAGES</h3>
                            <ul>
                                <li>
            
                                    <h4>{{$lang->lang}} </h4>
                                </li>
            
            
                            </ul>
                        </div>
            
                    </div>
                    @php
                    $lang= App\Models\Profile::where('user_id',Auth::user()->id)->first();
                @endphp
                    <div class="right_Side">
                        <div class="about">
                            <h2 class="title2">Profile</h2>
                            <p>{{$lang->desc}}</p>
                        </div>
                        @php
                        $edus= App\Models\Education::where('user_id',Auth::user()->id)->where('level_id',4)->get();
                    @endphp
                        <div class="about">
                            <h2 class="title2">Experience</h2>
                            @foreach ($edus as $educa)
                                
                            
                            <div class="box">
                                <div class="year_company">
                                    <h5>{{$edu->startdate}}-{{$edu->enddate}}</h5>
                                    <h5>{{$edu->field}}</h5>
                                </div>
                                <div class="text">
                                    <h4>{{$edu->edu_name}}</h4>
                                    <p>{{$edu->desc}} </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @php
                             $skill =App\Models\Skill::where('user_id',Auth::user()->id)->first();
                             $skillname = $skill->skill;
                            $skills = explode(',',$skillname);
                        @endphp
                        <div class="about skills">
                            <h2 class="title2">Professional Skills</h2>
                            @foreach ($skills as $skill)
                                
                            
                            <div class="box">
                                <h4>{{$skill}}</h4>
                                <div class="percent">
                                    <div style="width:95%;"></div>
                                </div>
                            </div>
                           
                            @endforeach
                            
                        </div>
                        <div class="About interest">
                            <h2 class="title2">Interest</h2>
                            <ul>
                                <li><i class="fa fa-bar-chart" aria-hidden="true"></i>Trading</li>
                                <li><i class="fa fa-laptop" aria-hidden="true"></i>Developing</li>
                                <li><i class="fa fa-gamepad" aria-hidden="true"></i>Gaming</li>
                                <li><i class="fa fa-briefcase" aria-hidden="true"></i>Business</li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div> <!-- end section -->
            </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    
      </main>
    <!-- main -->
  </div> <!-- .wrapper -->
  <script src="{{asset('backend/js/jquery.min.js')}}"></script>
  <script src="{{asset('backend/js/popper.min.js')}}"></script>
  <script src="{{asset('backend/js/moment.min.js')}}"></script>
  <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/js/simplebar.min.js')}}"></script>
  <script src='{{asset('backend/js/daterangepicker.js')}}'></script>
  <script src='{{asset('backend/js/jquery.stickOnScroll.js')}}'></script>
  <script src="{{asset('backend/js/tinycolor-min.js')}}"></script>
  <script src="{{asset('backend/js/config.js')}}"></script>
  <script src="{{asset('backend/js/d3.min.js')}}"></script>
  <script src="{{asset('backend/js/topojson.min.js')}}"></script>
  <script src="{{asset('backend/js/datamaps.all.min.js')}}"></script>
  <script src="{{asset('backend/js/datamaps-zoomto.js')}}"></script>
  <script src="{{asset('backend/js/datamaps.custom.js')}}"></script>
  <script src="{{asset('backend/js/Chart.min.js')}}"></script>
  <script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="{{asset('backend/js/gauge.min.js')}}"></script>
  <script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('backend/js/apexcharts.min.js')}}"></script>
  <script src="{{asset('backend/js/apexcharts.custom.js')}}"></script>
  <script src='{{asset('backend/js/jquery.mask.min.js')}}'></script>
  <script src='{{asset('backend/js/select2.min.js')}}'></script>
  <script src='{{asset('backend/js/jquery.steps.min.js')}}'></script>
  <script src='{{asset('backend/js/jquery.validate.min.js')}}'></script>
  <script src='{{asset('backend/js/jquery.timepicker.js')}}'></script>
  <script src='{{asset('backend/js/dropzone.min.js')}}'></script>
  <script src='{{asset('backend/js/uppy.min.js')}}'></script>
  <script src='{{asset('backend/js/quill.min.js')}}'></script>
  <script src='{{asset('backend/js/toastr.min.js')}}'></script>
  <script src='{{asset('backend/js/jquery.dataTables.min.js')}}'></script>
  <script src='{{asset('backend/js/dataTables.bootstrap4.min.js')}}'></script>
  <script src="{{asset('backend/js/sweetalert2@11')}}"></script>
  <script>
    $(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

  
                  Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete This Data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                    }
                  }) 


    });

  });
  </script>
 <script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script> 

  <script>
    $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
    $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
    $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
    $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
    /** date range picker */
    if ($('.datetimes').length) {
      $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
    }
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
    cb(start, end);
    $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
    $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
    $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
    // editor
    var editor = document.getElementById('editor');
    if (editor) {
      var toolbarOptions = [
        [
          {
            'font': []
          }],
        [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        [
          {
            'header': 1
          },
          {
            'header': 2
          }],
        [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
        [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
        [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
        [
          {
            'direction': 'rtl'
          }], // text direction
        [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
        [
          {
            'align': []
          }],
        ['clean'] // remove formatting button
      ];
      var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
    }
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
  <script>
    var uptarg = document.getElementById('drag-drop-area');
    if (uptarg) {
      var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
          {
            endpoint: 'https://master.tus.io/files/'
          });
      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      });
    }
  </script>
  <script src="{{asset('backend/js/apps.js')}}"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
  </script>
</body>

</html>