<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Тропа</title> 
   <style type="text/css">
    
 
   .alert-message .alert-icon {
    width: 3rem;
     }
     .alert-sucess .close{
    font-size: 1.5 rem;
    color: #a6a6a6;
 
    }
    .alert-warning .alert-icon {
    background-color: #b8daff;
      }
    .mal1
    {
     font-size:12px;
    }
   .modal-header
   {
   background-color: #E0EEF8; 
   border-radius: 8px;
  }
 .badge-primary1
 {
  background-color:#62BBE9;
  color:#FFFFFF;
 }

  .modal-content  {
    -webkit-border-radius: 8px !important;
    -moz-border-radius: 8px !important;
    border-radius: 8px !important; 
}
  .card-header
  {
   background-color: #FFE748; 
    border-radius: 8px;
  }

  ul li span { 
 display: inline-block;
  width: 50px;
}
  input[type=checkbox]
   {
   width: 23px;
   height: 23px;
   margin: 2 auto;
   background-color: #B2DBFF;
   border: 3px solid #2E2E2E;
   border-radius: 24px;
   vertical-align: middle;
   }
   .form-control
   {
    border-color:#53A5CE;
    border-radius:21px;
   }
  .label-brand
  {
    font-size:18px;
    color:#EFFFD5;
 
  }
    input
   {
    font-size:13px;
    border-radius: 21px;
   }
   label
   {
    font-size:15px;
   }
   #gross
   {
   width: 500px;
   height: 40px; 
   background-color:#5EBBE9;
   border-color:#53A5CE;
   }
   .late
     {
   
   background-color:#BD625D;
  
   }
   .c_text
   {
    font-size:18px;
   }
 #gross_clock
 {
   
   align:center;
   width: 800px;
   height: 40px; 
   background-color:#5EBBE9;
   border-color:#53A5CE;
 }

  #tabs,#tab1
   {
   border-color:#53A5CE;
   }
    hr
   {
    display: block;
    height: 3px;
    border: 1;
    border-top: 1px solid #53A5CE;
    margin: 1em 0;
    padding: 0; 
  
   }
/*
.nav-link:hover {
  background-color:#8BC7F8;
  color: #D2E9F8;
}*/
 
.form-control {
  margin:0 3px;  
  margin:3px 0;  
 }

.red 
{
 
  color: #D14651;
}

.green
{
 
  color: #18BA1B;
}
 .nav-link
 {
  font-size:21px;
  color:#5EBBE9;
 }

    .bg-user
    {
    background-color:#36B77D;
    border-color:#488FB2;
     }
    i
    {
     font-size:40px;
     border-color:#488FB2;
     }

   .label_user {
    color: #000000;
    margin-left: 10;
  }  
   body 
{
    font-family: times;
}
  
  checkbox {
  position: absolute;
  z-index: -1;
  opacity: 0;
  margin: 10px 0 0 20px;
}  
.modal-dialog
{
  background-color:#C6F8FF;
  border-radius: 8px;
}

 #group_label
   {
    color:#3FB0E9;
   font-size:39px;
  }
 </style>
 

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{!! asset('css/bootstrap.css')!!}">
    <link rel="stylesheet" href="{!! asset('css/fa_all.css')!!}">
    <link rel="stylesheet" href="{!! asset('css/jquery.dataTables.min.css')!!}">
    <link rel="stylesheet" href="{!! asset('jquery-ui-1.12.1.custom/jquery-ui.theme.min.css')!!}">

    <link rel="stylesheet" href="{!! asset('jquery-ui-1.12.1.custom/jquery-ui.min.css')!!}">
    <script src="{!!asset('js/all.js')!!}"></script>
    <script src="{!!asset('js/jquery-3.3.1.min.js')!!}"></script>
    <script src="{!!asset('jquery-ui-1.12.1.custom/jquery-ui.min.js')!!}"></script>
 
    <script src="{!!asset('js/jquery.dataTables.min.js')!!}"></script>
 
    <script>
     function ConfirmDelete(){
     return confirm('Удалить?');
     }
    </script>
<script>

  $("#datepicker1,#datepicker2").datepicker({
      monthNames:["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
      dayNamesMin:["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
      firstDay:1,
      defaultDate: +7,
      //dateFormat:"yy-mm-dd"
    dateFormat:"dd.mm.yy"
   });
 
 </script>

</head>
<body>
{{csrf_field()}}
      
<nav class="navbar fixed-top  navbar-expand-lg navbar-light bg-user">
 <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><label class="label-brand"><b> ПО "Тропа" <i class="far fa-copyright"></i></b>  </label> </a>
    </div>
  
    <ul class="nav navbar-nav navbar-right">
    <form class="navbar-form " role="search" method="post" id="nav1">
     <div class="form-group"> 
         <input type="text" id="filterbox" placeholder="Поиск в найденном" class="form-control" size="18" name="poisk1"> 
       
     </div>
    </form> 

     <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
 
      </ul>
  </div>
</nav>
<br>  

 
 @yield('content')
 



</body>

    @stack('scripts')

</html>
 