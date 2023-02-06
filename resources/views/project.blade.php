@extends('index')
@section('content')
<!-- <div class="content-page"> -->
<div class="container-fluid">

   <div class="row">
      <div class="col-md-12 mb-4 mt-1">
         <div class="d-flex flex-wrap justify-content-between align-items-center">
        
         <a href="{{route('form')}}" class="btn btn-primary">Add Project</a>
</div>
</div>
 
      <div class="col-lg-8 col-md-9">
      <h4 class="font-weight-bold">Project Summary</h4>

         <div class="row">

            <div class="col-md-4">
            
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-2 text-secondary">Not Started</p>
                            <div class="d-flex flex-wrap justify-content-start align-items-center">
                               <p class="mb-0 ml-3 text-success font-weight-bold">0</p>
                            </div>                            
                        </div>
                     </div>
                  </div>
               </div>   
            </div>
            <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-2 text-secondary">In Progress</p>
                            <div class="d-flex flex-wrap justify-content-start align-items-center">
                               <p class="mb-0 ml-3 text-success font-weight-bold">25</p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>   
            </div>
            <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                           <p class="mb-2 text-secondary">On hold</p>
                           <div class="d-flex flex-wrap justify-content-start align-items-center">
                              <p class="mb-0 ml-3 text-danger font-weight-bold">10</p>
                           </div>                            
                        </div>
                    </div>
                </div>
</div>
</div>
                <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-2 text-secondary">canceled</p>
                            <div class="d-flex flex-wrap justify-content-start align-items-center">
                               <p class="mb-0 ml-3 text-success font-weight-bold">25</p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>   
            </div>
            <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-2 text-secondary">Finshed</p>
                            <div class="d-flex flex-wrap justify-content-start align-items-center">
                               <p class="mb-0 ml-3 text-success font-weight-bold">25</p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>   
            </div>
            @endsection
           