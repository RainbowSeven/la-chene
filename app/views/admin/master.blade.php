<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ch&#234;ne Networks</title>
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}">
</head>
<body>
  <!-- Navbar goes here -->
  <nav>
        <div class="nav-wrapper deep-orange darken-4">
           <img style="width:50px; height:50px"src="{{ asset('images/Chene-logo.png')}}">
          <a href="#!" class="brand-logo">Ch&#234;ne Networks</a>
          <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            @if(Auth::check())
            <li><a href="{{ url('admin/quotes') }}">Quotes</a></li>
            <li><a href="{{ url('admin/applications')}}">Applications</a></li> 
            <li><a href="{{ url('admin/contact-messages')}}">Messages</a></li> 
            <li><a href="{{ url('admin/subscribers') }}">Subscribers</a></li>
            @endif
            @if(!Auth::check())
            <li><a href="{{ url('admin/login') }}">Login</a></li>
            @endif
            @if(Auth::check())
            <li><a href="{{ url('admin/logout') }}">Logout</a></li>
            @endif
          </ul>
          <ul id="mobile-nav" class="side-nav">
            <li><a href="{{ url('admin/quotes') }}">Quotes</a></li>
            <li><a href="{{ url('admin/applications')}}">Applications</a></li>
            <li><a href="{{ url('admin/contact-messages')}}">Messages</a></li> 
            <li><a href="{{ url('admin/subscribers') }}">Subscribers</a></li>
            @if(!Auth::check())
            <li><a href="{{ url('admin/login') }}">Login</a></li>
            @endif
            @if(Auth::check())
            <li><a href="{{ url('admin/logout') }}">Logout</a></li>
            @endif
          </ul>
        </div>
    </nav>
    <!-- Page Layout here -->
    <div class="row">
      <!-- sidenav -->
      <div class="col s3">
        <ul>
          @yield('sidenav')
        </ul>
      </div>  
      <div class="col s9">
        <!-- page content  -->
            @section('error')
              @if(Auth::check())
                @if(!isset($res))
                  <div class="card amber lighten-5">
                    <div class="card-content black-text">
                      <p class="flow-text">{{ "No {$res_type } has been rec'vd yet."; }}</p>
                    </div>
                  </div>
                @endif
              @endif
            @show
            
            @yield('content')
      </div>

    </div>

    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script>
        $( document ).ready(function(){
            $('.button-collapse').sideNav();
            var url;
            var data;
            var mtype;
            var message;
            $('.modal-caller').click(function(event) {
              event.preventDefault();
              var email = $(this).attr('data-email');
              var name = $(this).attr('data-name');
              var mtype = $(this).attr('data-mtype');
              if(mtype == 'application')
              $('#modal-subject').val('RE: '+$('#position').text()).prev().addClass('active');
              if(mtype == 'quote')
              $('#modal-subject').val('RE: '+$('#svc').text()).prev().addClass('active');
              $('#modal-message').text('Dear '+name+'\n\nKind Regards,\nChêne Networks');
              $('#modal-message').prev().addClass('active');
              $('#modal-email').val(email);
              $('#modal-email').prev().addClass('active');
              $('#message-modal').openModal();
              url = $(this).attr('data-url');
              var token = $(".modal-content input[name='_token']").val();
              data = {'email':email, 'mtype':mtype, '_token':token};
            });
            $('#modal-sender').click(function(event) {
              event.preventDefault();
              data['message'] = $('#modal-message').text();
              data['subject'] = $('#modal-subject').val();
              $.post(url, data);
              console.log(data);
              
            
            });
            
            
        });
    </script>
</body>
</html>