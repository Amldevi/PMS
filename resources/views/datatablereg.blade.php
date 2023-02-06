@extends('index')
@section('content')
@extends('layout.delete')


<div class="container">
    <h1>Project Details</h1>
    <div class="row">
        
    </div><br>
    
    <table id="data-table" class="table data-table table-striped table-bordered ">
        <thead>
            <tr>
            <th>ID</th>
                <th>Title</th>
                
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Project Manager</th>
                
                <th>File</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection
 
@section('js')

   
<script type="text/javascript">
$(document).ready( function () {
    $('.data-table').dataTable({
       processing: true,
       serverSide: true,
       destroy: true,
       ajax: "{{route('get-project')}}",
       columns: [
                {
                    data: 'DT_RowIndex',
                    orderable: false, 
                    searchable: false
                }, 
                {data:'title', name:'title'},
                {data: 'startdate', name: 'startdate'},
                {data: 'enddate', name: 'enddate'},
                {data: 'status', name: 'status'},
                {data: 'projectmanager', name: 'projectmanager'},
                {data: 'file', name: 'file', orderable: true, searchable: true},
                {data: 'action', name: 'action', orderable: true, searchable: true}


                
             ]
    });
 });
 function data_modal($id)
  {
    // alert($id);
      var del_id = $id;
        $('#delete_id').val(del_id);
    
    }
</script>
@if ($message = Session::get('success'))
     <script type="text/javascript">
        Swal.fire({
        //   position: 'top-end',
        icon: 'success',
        title: '{{$message}}',
        showConfirmButton: false,
        timer: 1500
    })
    </script>
@endif

</script>
<script>

</script>
@endsection