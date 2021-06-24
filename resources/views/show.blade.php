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
        <div class="mx-auto pull-right">
            <div class="">
                
            </div>
        </div>
    </div>
                
              </div>
              <!-- /.card-header -->

              <div class="card-body table-responsive p-0">







                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th>ID</th>
                    <th>NAME</th>
					          <th>EMAIL</th>
					          <th>PASSWORD</th>
					          <th>CONFIRMPASSWORD</th>
            <th>IMAGE</th>
					  <th>AMOUNT</th>
					  <th>AMOUNT_DATE</th>
					  <th>ACTION</th>
					  <th>ACTION</th>
					  <th>ACTION</th>
					  <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($viewarr as $show)
						<tr>
						<td>{{$show->id}}</td>
						<td>{{$show->name}}</td>
						<td>{{$show->email}}</td>
						<td>{{$show->passwrod}}</td>
						<td>{{$show->confirmpassword}}</td>
           
            <td><img src="{{url('images/'.$show->image)}}" width="50px"/></td>
          	<td>{{$show->amount}}</td>
						<td>{{$show->amount_date}}</td>
						
						
						<td><a href="delete/{{$show->id}}">Delete</a></td>
						<td><a href="edit/{{$show->id}}">edit</a></td>
						<td><a href="changepassword/{{$show->id}}">changepassword</a></td>
						<td><a href="changeprofile/{{$show->id}}">changeprofile</a></td>
						
						</tr>
					@endforeach
                  </tbody>
                </table>

              </div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
                            {{ $viewarr->links() }}

          </div>
        </div>
        <!-- /.row -->

                             
                              
                         
                       
               
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