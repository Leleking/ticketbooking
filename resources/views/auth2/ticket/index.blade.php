@extends('layouts.admin')
@section('content')
<div class="content mt-3">

    


   
         
     <!--/.col-->
 
     <div class="col-sm-6 col-lg-3" data-toggle="modal" data-target="#addticket" >
         <div class="card text-white bg-flat-color-2">
             <div class="card-body pb-0">
                 
                 <h4 class="mb-0">
                     <span class="count"></span>
                 </h4>
                 <p class="text-light"  >Add Ticket</p>
 
                 <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    
                 </div>
 
             </div>
         </div>
     </div>
     <!--/.col-->
 
     <div class="col-sm-6 col-lg-3">
         <div class="card text-white bg-flat-color-3">
             <div class="card-body pb-0">
                 <div class="dropdown float-right">
                     <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                         <i class="fa fa-cog"></i>
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <div class="dropdown-menu-content">
                            
                         </div>
                     </div>
                 </div>
                 <h4 class="mb-0">
                 <span class="count"></span>
                 </h4>
                 <p class="text-light">View Categories</p>
 
             </div>
 
                 <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    
                 </div>
         </div>
     </div>
     <!--/.col-->
 
   
   
    <div class="modal fade" id="addticket" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Add Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['action'=>'ticketController@store','method'=>'POST','class'=>"form-horizontal",'files'=>true]) !!}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="control-group">
                                <div class="controls">
                                    <label for="date" class="control-label">Date of Movie</label>
                                    <input type="date" name="date" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                                <div class="control-group">
                                    <div class="controls">
                                        <label for="date" class="control-label">Start Time</label>
                                        <input type="time" name="start_time" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                    <div class="control-group">
                                        <div class="controls">
                                            <label for="date" class="control-label">End Time</label>
                                            <input type="time" name="end_time" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="control-group">
                                            <div class="controls">
                                                <label for="date" class="control-label">Number of Tickets</label>
                                                <input type="number" name="ticket_count" class="form-control" id="">
                                            </div>
                                        </div>
                                    </div>
                    </div>
          
                    <div class="row">
                    <div class="col-lg-4">
                    <div class="control-group">
                            {{Form::label('price','price',['class'=>'control-label'])}}
                            <div class="controls">
                            {{Form::number('price','price',['class'=>'form-control'])}}
                            </div>
                        </div>
                    </div> <div class="col-lg-4">
                            <div class="control-group">
                                   
                                    <div class="controls">
                                   <img src="/images/movietickets.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                   
                            <div class="col-lg-4">
                                    <div class="control-group">
                                            {{Form::label('Movie','Movie',['class'=>'control-label'])}}
                                            <div class="controls">
                                            {{Form::select('movie_id',$movie,['class'=>'form-control'])}}
                                            </div>
                                        </div>
                                </div>    
                    </div>
                    <!--
                     
                    -->
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                </div>
               
                        {!!Form::close()!!}
                
            </div>
        </div>
    </div>
     <!--/.col-->
 
    
 
    
 
 
    
    
 
 
    
 
    
   

 
    
     <script>
        
        $(document).ready(function(){
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

            $('#submit').on('click', function(e) {
        e.preventDefault(); 
        var data = $('form').serialize();
        $.ajax({
        type: "POST",
        url: '/addTicket',
        data: data,
        beforeSend: function(){
            swal('Loading...');
        },
        success: function(data) {
            //swal("Good job!", data.response, "success");
          swal('Great',data.response,'success');
        },
        error: function(errors,status,xhr){
            var err = errors.responseJSON.errors;
           $.each(err,function(key,value){
            sweetAlert("Oops...", value+"!!", "error");
           }) ;
          
        }
    });
    });
   
           
        });
   

      </script>
  
  
 
 </div> <!-- .content -->
 </div><!-- /#right-panel -->
 
@endsection