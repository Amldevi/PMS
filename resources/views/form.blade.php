@extends('index')
@section('content')


<form action="{{route('store')}}"method="POST" enctype="multipart/form-data">
  @csrf
    <h1>Project Details</h1><br/><br/>
   
    <div class="form-row">
    <div class="form-group col-sm-6">
   <label for="lname">Project Title</label>
  <input type="text" class="form-control" name="title" id="lname">
    </div>
    
    <!-- <div class="form-group col-md-6"> -->
    <div class="form-group"> <!-- Date input -->
    <label> Start Date</label>
    <input class="form-control" id="date"  name="startdate" placeholder="MM/DD/YYY" type="date"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="form-group"> <!-- Date input -->
    <label>End Date</label>
    <input class="form-control" id="date"  name="enddate" placeholder="MM/DD/YYY" type="date"/>
                               
 </div>
  <!-- </div> -->
  
  
  <div class="form-group col-sm-6">
  <label>Project Manager</label>
    <select class="form-control" name="projectman" id="exampleFormControlSelect3">
    <option>ADMIN</option>
    <option></option>
    
    <option selected=""></option>
</select>
</div>
<div class="form-group col-sm-6">
<label>Category</label>
 <select class="form-control"  name="cat" id="exampleFormControlSelect4">
<option>WEB</option>
<option></option>
<option selected=""></option>
 <option></option>
<option></option>
 </select>
 </div>   
        
 <!-- <div class="form-group col-sm-6">
<label>Team Members</label>
 <select class="form-control" name="team" id="exampleFormControlSelect4">
<option>PMS</option>
<option></option>
<option selected=""></option>
 <option></option>
<option></option>
 </select>
 </div>      -->
 <div class="form-group col-sm-6">
<label>Status</label>
 <select class="form-control" name="status" id="exampleFormControlSelect4">
<option>pending</option>
<option></option>
<option selected=""></option>
 <option></option>
<option></option>
 </select>
 </div>     
</div>                                              
<div class="form-group col-sm-12">
 <label>Project Description</label>
<textarea class="form-control" name="desc" rows="4"  cols="6"style="line-height: 22px;"></textarea> 
</div>
<div class="form-group">
  <label>Upload File</label>
  <input type="file" name="file" class="form-control">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-primary">Reset</button>
  </div>
  </div>
</form>
@endsection