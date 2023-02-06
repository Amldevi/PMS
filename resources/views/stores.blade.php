@extends('index')
@section('content')


<form action="{{route('stores')}}"method="POST" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="id" class="form-control"value={{$row->id ?? ''}}>
    <h1>Project Details</h1><br/><br/>
   
    <div class="form-row">
    <div class="form-group col-sm-6">
   <label for="lname">Project Title</label>
  <input type="text" class="form-control" name="title" id="lname" value={{$row->title ?? ''}}>
    </div>
    
    <!-- <div class="form-group col-md-6"> -->
     <!-- Date input -->
    <div class="form-group"> <!-- Date input -->
                               <label>start Date</label>
                               <input class="form-control" id="date"  name="startdate" placeholder="MM/DD/YYY" type="date" value={{$row->startdate?? ''}}>
                               
                             </div>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <div class="form-group"> <!-- Date input -->
                               <label>start Date</label>
                               <input class="form-control" id="date"  name="startdate" placeholder="MM/DD/YYY" type="date" value={{$row->enddate?? ''}}>
                               
                             </div>
                               
 </div>
  <!-- </div> -->
  
  
  <div class="form-group col-sm-6">
  <label>Project Manager</label>
    <select class="form-control" name="projectman" id="exampleFormControlSelect3" >
    <option value="Admin" {{ $row->projectmanager == 'Admin' ? 'selected' : ''}}>Admin</option>
<option value="Team" {{ $row->projectmanager == 'Team' ? 'selected' : ''}}>Team</option>
 <option value="others" {{ $row->projectmanager == 'others' ? 'selected' : ''}}>Others</option>
    
   
</select>
</div>
<div class="form-group col-sm-6">
<label>Category</label>
 <select class="form-control"  name="cat" id="exampleFormControlSelect4" >
 <option value="web" {{ $row->category == 'WEB' ? 'selected' : ''}}>WEB</option>
<option value="Game" {{ $row->category == 'Game' ? 'selected' : ''}}>Game</option>
 <option value="others" {{ $row->category == 'others' ? 'selected' : ''}}>Others</option>
 </select>
 </div>   
        
 
 <div class="form-group col-sm-6">
<label>Status</label>
 <select class="form-control"  name="status" id="exampleFormControlSelect4" >
 <option value="Hold" {{ $row->status == 'Hold' ? 'selected' : ''}}>Hold</option>
<option value="Pending" {{ $row->status == 'Pending' ? 'selected' : ''}}>Pending</option>
 <option value="Completed" {{ $row->status == 'Completed' ? 'selected' : ''}}>Completed</option>
 </select>
 </div>                                          
<div class="form-group col-sm-12">
 <label>Project Description</label>
<textarea class="form-control" name="desc" rows="4"  cols="6"style="line-height: 22px;">{{$row->description?? ''}}</textarea> 
</div>

</div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary">Reset</button>
  </div>
  </div>
</form>
@endsection