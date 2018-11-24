@extends('layouts.my_app')

@section('content')
    <br>
    <br><br>
<div class="container">
  <div class="row">
   <div class="col-lg-12">
    <table class="table table-striped" id="tblData" cellspacing="0" width="100%">
    {{csrf_field()}}
        <thead>
            <tr>
              <td align="center"><b><h4><span class="badge badge-info">data_1</span></h4> </b></td>
              <td align="center"><b><h4><span class="badge badge-info">data_2</span></h4></b></td> 
              <td align="center"><b><h4><span class="badge badge-info">data_3</span></h4></b></td> 
              <td align="center"><b><h4><span class="badge badge-info">data_4</span></h4></b></td> 
              <td align="center"><b><h4><span class="badge badge-info">data_5</span></h4></b></td> 
              <td align="center"><b><h4><span class="badge badge-info">data_6</span></h4></b></td> 
       </tr>  
            
            </tr>
        </thead>
    </table>
</div>
</div>
</div>
@endsection

@push('scripts')

<script>
    var table;
    $('document').ready(function(){
 
        table = $('#tblData').DataTable({ 
            stateSave: true,
            responsive: true,
            processing: true,
            serverSide : true,
            info:     false,
            //searching: false,
            order : [0,'desc'],
                language: {
              processing: "<img src='{!!asset('img/lg.triple-gears-loading-icon.gif')!!}'>",
            },

            ajax :  '{{route('go')}}',
            columns: [
                {data: 'data_1' , name : 'data_1' },
                {data: 'data_2' , name : 'data_2' },
                {data: 'data_3' , name : 'data_3' },
                {data: 'data_4' , name : 'data_4' },
                {data: 'data_5' , name : 'data_5' },
                {data: 'data_6' , name : 'data_6' },
               
            ]
        });
        // table.draw(false);
         $("#filterbox").keyup(function() {
        table.search(this.value).draw();
    }); 
  setInterval( function () {
    table.ajax.reload();
     }, 10000 );
    });
 


</script>
@endpush