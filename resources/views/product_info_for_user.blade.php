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

    <div class="d-flex justify-content-between align-items-center mt-3">
        <h4 class="mb-3">Product List</h4>
        <a class="btn btn-sm btn-primary" href="{{url('/product_add')}}" role="button">Add Product</a>
    </div>
    
    <table class="table table-bordered text-center product_user_view"  id="example" >
        <thead>
            <tr>
                <th style="min-width: 10px;" >#</th>
                <th style="min-width: 110px;">Buyer NAME</th>
                <th style="min-width: 110px;">CONTACT Parson</th>
                <th >COUNTRY</th>
                <th >Order Number</th>
                <th >PRODUCT PHOTO</th>
                <th >PRODUCT NAME</th>
                <th >Descriptions</th>
                <th >Quantity</th>
                <th >SIZE</th>
                <th >FACTORY NAME</th>
                <th >CURRENT PROGRESS</th>
                <th >ESTIMATE DELIVERY</th>
                <th >ACTUAL DELIVERY</th>
                <th >REMARK</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td> 
                <td>$320,800</td> 
                <td>$320,800</td> 
                <td>
                    <a class="btn btn-sm btn-primary" href="#" role="button">Edit</a>
                    <a class="btn btn-sm btn-primary" href="{{url('/product')}}" role="button">Details</a>
                </td> 
            </tr>
        </tbody>
        </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
        $('#example').DataTable();
        });
    </script>
</body>
</html>