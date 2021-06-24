@include('include/header')
@include('include/nav')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3></br>
				      <a href="create">Add record</a>
                
       <div>


				
					<table border="2">
					<tr>
						<td>id</td>
						<td>first_name</td>
						<td>last_name</td>
						<td>email</td>
						<td>phoneno</td>
						<td>address</td>
						
						
						
					</tr>
					@foreach($viewarr as $show)
						<tr>
						<td>{{$show->id}}</td>
						<td>{{$show->first_name}}</td>
						<td>{{$show->last_name}}</td>
						<td>{{$show->email}}</td>
						<td>{{$show->phoneno}}</td>
						<td>{{$show->address}}</td>
						</tr>
					@endforeach
					</table>
					
					                            

				</div>
    <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  

@include('include/footer')
