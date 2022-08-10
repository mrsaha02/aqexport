<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <style>
        
        table{
            border: 1px solid #000 !important;
            border-collapse: collapse !important;
            overflow-x: auto;
        }
        table thead{
            vertical-align: middle !important;
        }
        table thead th{
            border-bottom: none !important;
        }
        /* .product_user_view th{
            min-width: 100px;
        } */
    </style>
</head>
<body class="mx-3 mt-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="buyer-tab" data-bs-toggle="tab" data-bs-target="#buyer" type="button" role="tab" aria-controls="buyer" aria-selected="true">Buyer Information</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="employee-tab" data-bs-toggle="tab" data-bs-target="#employee" type="button" role="tab" aria-controls="employee" aria-selected="false">Employee Information</button>
    </li>
    </ul>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="buyer" role="tabpanel" aria-labelledby="buyer-tab">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <h4 class="mb-3">Buyer Info List</h4>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add_buyer">Add Buyer</button>
        </div>
        <table class="table table-bordered text-center product_user_view"  id="buyer_list" >
            <thead>
                <tr>
                    <th >#</th>
                    <th >Buyer NAME</th>
                    <th >CONTACT Parson</th>
                    <th >COUNTRY</th>
                    <th >Email</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($buyers as $key=>$buyer)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$buyer->name}}</td>
                    <td>{{$buyer->buyer_contact_name}}</td>
                    <td>{{$buyer->buyer_country}}</td>
                    <td>{{$buyer->email}}</td>
                    <td>
                        <button class="btn btn-sm btn-primary buyer_edit" role="button" value="{{$buyer->id}}">Edit</button>
                        <a class="btn btn-sm btn-primary" href="#" role="button">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="employee" role="tabpanel" aria-labelledby="employee-tab">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <h4 class="mb-3">Employee Info List</h4>
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add_employee">Add Employee</button>
        </div>
        <table class="table table-bordered text-center product_user_view"  id="employee_list" >
            <thead>
                <tr>
                    <th >#</th>
                    <th >Employee ID</th>
                    <th >NAME</th>
                    <th >Position</th>
                    <th >Email</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key=>$user)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$user->emp_id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <button class="btn btn-sm btn-primary edit_employee" role="button" value="{{$user->id}}">Edit</button>
                        <a class="btn btn-sm btn-primary" href="#" role="button">Delete</a>
                    </td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>

    <!-- add buyer modal -->
    <div class="modal fade" id="add_buyer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Buyer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('add_buyer')}}" method="post">
             @csrf
                <input type="hidden" name="buyer_role" value="5">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="buyer_name" class="form-label">Buyer Name</label>
                        <input type="text" class="form-control" id="buyer_name" name="buyer_name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="contact_person" class="form-label">Select Contact Parson</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="contact_person" name="contact_person">
                            <option selected>Open this select menu</option>
                            @foreach($contacts as $contact)
                            <option value="{{$contact->name}}">{{$contact->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="buyer_country" class="form-label">Buyer Country</label>
                        <input type="text" class="form-control" id="buyer_country" name="buyer_country" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="buyer_email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="buyer_email" name="buyer_email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="buyer_password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="buyer_password" name="buyer_password" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Update buyer modal -->
    <div class="modal fade" id="update_buyer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">update Buyer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('update_buyer')}}" method="post">
             @csrf
             @method('PUT')
                <div class="modal-body">
                    <input type="text" id="buyer_id" name="buyer_id">
                    <input type="hidden" name="buyer_role" value="5">
                    <div class="mb-3">
                        <label for="buyer_name_edit" class="form-label">Buyer Name</label>
                        <input type="text" class="form-control" id="buyer_name_edit" name="buyer_name_edit" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="contact_person_edit" class="form-label">Select Contact Parson</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="contact_person_edit" id="contact_person_edit" value="">
                            <option selected>Open this select menu</option>
                            @foreach($contacts as $contact)
                            <option value="{{$contact->name}}">{{$contact->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="buyer_country_edit" class="form-label">Buyer Country</label>
                        <input type="text" class="form-control" id="buyer_country_edit" name="buyer_country_edit" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="buyer_email_edit" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="buyer_email_edit" name="buyer_email_edit" aria-describedby="emailHelp" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- add employee modal -->
    <div class="modal fade" id="add_employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('add_employee')}}" method="post">
             @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="employee_id" class="form-label">Employee ID</label>
                        <input type="text" class="form-control" id="employee_id" name="employee_id" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="emp_name" class="form-label">Employee Name</label>
                        <input type="text" class="form-control" id="emp_name" name="emp_name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Select Position</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="role" id="role">
                            <option selected>Open this select menu</option>
                            @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->role}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="emp_email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emp_email" name="emp_email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="emp_password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="emp_password" name="emp_password" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- update employee modal -->
    <div class="modal fade" id="update_employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('update_employee')}}" method="post">
             @csrf
             @method('PUT')
                <div class="modal-body">
                    <input type="text" id="c_employee_id" name="c_employee_id" value="">
                    <div class="mb-3">
                        <label for="employee_id_edit" class="form-label">Employee ID</label>
                        <input type="text" class="form-control" id="employee_id_edit" name="employee_id_edit" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="employee_name_edit" class="form-label">Employee Name</label>
                        <input type="text" class="form-control" id="employee_name_edit" name="employee_name_edit" aria-describedby="emailHelp" value="">
                    </div>
                    <div class="mb-3">
                        <label for="role_edit" class="form-label">Select Position</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="role_edit" id="role_edit" value="">
                            <option selected>Open this select menu</option>
                            @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->role}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="employee_email_edit" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="employee_email_edit" name="employee_email_edit" aria-describedby="emailHelp" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <script>
        
        $(document).ready(function(){

            $(document).on('click', '.buyer_edit',function(){
                var buyer_id = $(this).val();
                // console.log(buyer_id);
                $("#update_buyer").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/buyer_edit/"+buyer_id,
                    success: function(response){
                        // console.log(response.bi);
                        $('#buyer_id').val(buyer_id);
                        $('#buyer_name_edit').val(response.bi.name);
                        $('#contact_person_edit').val(response.bi.buyer_contact_name);
                        $('#buyer_country_edit').val(response.bi.buyer_country);
                        $('#buyer_email_edit').val(response.bi.email);
                    }
                });
            });
            
            $(document).on('click', '.edit_employee',function(){
                var employee_id = $(this).val();
                // console.log(employee_id);
                $("#update_employee").modal('show');
                $.ajax({
                    type:"GET",
                    url: "/employee_edit/"+employee_id,
                    success: function(response){
                        // console.log(response.ei);
                        $('#c_employee_id').val(employee_id);
                        $('#employee_id_edit').val(response.ei.emp_id);
                        $('#employee_name_edit').val(response.ei.name);
                        $('#role_edit').val(response.ei.role_id);
                        $('#employee_email_edit').val(response.ei.email);
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function () {
        $('#buyer_list').DataTable();
        $('#employee_list').DataTable();
        });
    </script>
    

</body>
</html>