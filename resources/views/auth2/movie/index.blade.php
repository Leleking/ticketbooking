@extends('layouts.admin')
@section('content')
<div class="content mt-3">

    


   
         
     <!--/.col-->
 
     <div class="col-sm-6 col-lg-3" data-toggle="modal" data-target="#addcategory" >
         <div class="card text-white bg-flat-color-2">
             <div class="card-body pb-0">
                 
                 <h4 class="mb-0">
                    
                 </h4>
                 <p class="text-light"  >Add Movie</p>
 
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
                
                 </h4>
                 <p class="text-light">View Movies</p>
 
             </div>
 
                 <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    
                 </div>
         </div>
     </div>
     <!--/.col-->
 
   
   
    <div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['action'=>'movieController@store','method'=>'POST','class'=>"form-horizontal",'files'=>true]) !!}
                <div class="modal-body">
                   
            <div class="control-group">
                    {{Form::label('Name','name',['class'=>'control-label'])}}
                    <div class="controls">
                    {{Form::text('name','name',['class'=>'form-control'])}}
                    </div>
                </div>
                <div class="control-group">
                        {{Form::label('description','description',['class'=>'control-label'])}}
                        <div class="controls">
                        {{Form::text('description','description',['class'=>'form-control'])}}
                        </div>
                    </div>
                    <div class="row">
                    
                    
                    <div class="col-lg-4">
                            <div class="control-group">
                                    {{Form::label('Movie - Image','file',['class'=>'control-label'])}}
                                    <div class="controls">
                                    {{ Form::file('image')}}
                                    </div>
                                </div>
                            </div>
                   
                            <div class="col-lg-4">
                                    <div class="control-group">
                                            {{Form::label('Category','Category',['class'=>'control-label'])}}
                                            <div class="controls">
                                            {{Form::select('category_id',$category,['class'=>'form-control'])}}
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
 
    
 
    
 
 
    
    
 
 
    
 
    
   
 
 
     <div class="col-xl-3 col-lg-6">
         <div class="card">
             <div class="card-body">
                 <div class="stat-widget-one">
                     <div class="stat-icon dib"><i class="ti-video-clapper"></i></div>
                     <div class="stat-content dib">
                         <div class="stat-text">Total Movies</div>
                         <div class="stat-digit">{{count($movie)}}</div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 
 
    
  
 
 </div> <!-- .content -->
 </div><!-- /#right-panel -->
 
@endsection