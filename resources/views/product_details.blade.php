<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    </style>
</head>
<body class="mx-3 mt-5">
    <div class="d-flex justify-content-between align-items-center mt-3">
        <h4 class="mb-3">Product Details</h4>
        <a class="btn btn-sm btn-primary" href="{{url('/product_user_view')}}">Back To Previous Pages</a>
    </div>
    <table id="example" class="table table-bordered text-center">
        <thead>
            <tr>
                <th rowspan="3" class="text-center">#</th>
                <th colspan="3" class="text-center">BUYER DETAILS</th>
                <th colspan="11" class="text-center">As Per PO Information</th>
                <th rowspan="3" class="text-center">FACTORY NAME</th>
                <th colspan="4" class="text-center">Lab Dip Approval</th>
                <th colspan="7" class="text-center">Sampling</th>
                <th colspan="15" class="text-center">ACCESSORIES DETAIS</th>
                <th colspan="11" class="text-center">Fabric Details</th>
                <th colspan="14" class="text-center">Production Status</th>
                <th rowspan="3" class="text-center">Action</th>
            </tr>
            <tr>
                <th rowspan="2">BUYER NAME</th>
                <th rowspan="2">CONTACT PERSON</th>
                <th rowspan="2">COUNTRY</th>
                <th rowspan="2">Order #</th>
                <th rowspan="2">Style #</th>
                <th rowspan="2">PRODUCT NAME</th>
                <th rowspan="2">PHOTO</th>
                <th rowspan="2">PO Issue Date</th>
                <th rowspan="2">Shipment Date</th>
                <th rowspan="2">Fabric/Yarn Details</th>
                <th rowspan="2">GSM</th>
                <th rowspan="2">Descriptions</th>
                <th rowspan="2">SIZE</th>
                <th rowspan="2">Quantity</th>
                <th rowspan="2">PLANNING</th>
                <th rowspan="2">Color Way</th>
                <th rowspan="2">Print Stricke Offs</th>
                <th rowspan="2">Comments Received</th>
                <th rowspan="2">Style Approval</th>
                <th rowspan="2">Style Comments</th>
                <th rowspan="2">PLANNING</th>
                <th rowspan="2">PP Sample</th>
                <th rowspan="2">PP Comments</th>
                <th rowspan="2">Production Sample</th>
                <th rowspan="2">Production Comments</th>
                <th rowspan="2">MAIN LABEL</th>
                <th rowspan="2">CARE LABEL</th>
                <th rowspan="2">SIZE LABEL</th>
                <th rowspan="2">FLAG LABEL</th>
                <th rowspan="2">PATCH LABEL</th>
                <th rowspan="2">HANG TAG</th>
                <th rowspan="2">HANG TAG STRING</th>
                <th rowspan="2">DRAW STRING</th>
                <th rowspan="2">EYELET/BUTTON</th>
                <th rowspan="2">ELASTIC</th>
                <th rowspan="2">ZIPPER</th>
                <th rowspan="2">POLY</th>
                <th rowspan="2">GUM TAPE</th>
                <th rowspan="2">CARTON</th>
                <th rowspan="2">OTHERS</th>
                <th rowspan="2">PLANNING</th>
                <th colspan="2">Yarn</th>
                <th rowspan="2">PLANNING</th>
                <th colspan="2">Knitting</th>
                <th rowspan="2">PLANNING</th>
                <th colspan="2">Dyeing</th>
                <th rowspan="2">PLANNING</th>
                <th rowspan="2">Fab  Store del to cutting</th>
                <th rowspan="2">PLANNING</th>
                <th colspan="2">Cutting</th>
                <th colspan="2">Printing</th>
                <th rowspan="2">PLANNING</th>
                <th colspan="2">Sewing</th>
                <th colspan="2">Finishing</th>
                <th rowspan="2">PLANNING</th>
                <th colspan="2">Shipment</th>
            </tr>
            <tr>
                <th>Yarn Rcv Start</th>
                <th>Yarn Rcv Finish</th>
                <th>Knitting Start</th>
                <th>Knitting Finish</th>
                <th>Dyeing Start</th>
                <th>Dyeing Finish</th>
                <th>Cutting Start Date</th>
                <th>Cutting Finish Date</th>
                <th>Printing Start Date</th>
                <th>Printing Finish Date</th>
                <th>SEWING Date</th>
                <th>SEWING Finish Date</th>
                <th>Finishing Start Date</th>
                <th>Finishing Finish Date</th>
                <th>Shipment Start Date</th>
                <th>Shipment Finish Date</th>
                <th>Remarks</th>
            </tr>
        </thead>
        <tbody> 
        <tr>
                <td>{{ $product_info->name }}</td>
                <td>{{ $product_info->buyer_contact_name }}</td>
                <td>{{ $product_info->buyer_country }}</td>
                <td>{{ $product_info->order_no }}</td>
                <td>{{ $product_info->style }}</td>
                <td>{{ $product_info->product_name }}</td>
                <td>null</td>
                <td>{{ $product_info->po_issue_date }}</td>
                <td>{{ $product_info->shipment_date }}</td>
                <td>{{ $product_info->febric_details }}</td>
                <td>{{ $product_info->gsm }}</td>
                <td>{{ $product_info->description }}</td>
                <td>{{ $product_info->size }}</td>
                <td>{{ $product_info->quantity }}</td>
                <td>{{ $product_info->plannig_lab }}</td>
                <td>{{ $product_info->color_way }}</td>
                <td>{{ $product_info->print_stricke_offs }}</td>
                <td>{{ $product_info->comments_received }}</td>
                <td>{{ $product_info->style_approval }}</td>
                <td>{{ $product_info->style_comments }}</td>
                <td>{{ $product_info->plannig_sample }}</td>
                <td>{{ $product_info->pp_sample }}</td>
                <td>{{ $product_info->pp_comments }}</td>
                <td>{{ $product_info->production_sample }}</td>
                <td>{{ $product_info->production_comments }}</td>
                <td>{{ $product_info->main_label }}</td>
                <td>{{ $product_info->care_label }}</td>
                <td>{{ $product_info->size_label }}</td>
                <td>{{ $product_info->flag_label }}</td>
                <td>{{ $product_info->patch_label }}</td>
                <td>{{ $product_info->hang_tag }}</td>
                <td>{{ $product_info->hang_tag_string }}</td>
                <td>null</td>
                <td>{{ $product_info->eyelet }}</td>
                <td>{{ $product_info->elastic }}</td>
                <td>{{ $product_info->zipper }}</td>
                <td>{{ $product_info->poly }}</td>
                <td>{{ $product_info->gum_tape }}</td>
                <td>{{ $product_info->carton }}</td>
                <td>{{ $product_info->others }}</td>
                <td>{{ $product_info->yarn_planning }}</td>
                <td>{{ $product_info->yarn_start }}</td>
                <td>{{ $product_info->yarn_finish }}</td>
                <td>{{ $product_info->knitting_planning }}</td>
                <td>{{ $product_info->knitting_start }}</td>
                <td>{{ $product_info->knitting_finish }}</td>
                <td>{{ $product_info->dyeing_planning }}</td>
                <td>{{ $product_info->dyeing_start }}</td>
                <td>{{ $product_info->dyeing_finish }}</td>
                <td>{{ $product_info->deliver_cutting_planning }}</td>
                <td>{{ $product_info->cutting_planning }}</td>
                <td>{{ $product_info->cutting_start }}</td>
                <td>{{ $product_info->cutting_finish }}</td>
                <td>{{ $product_info->printing_start }}</td>
                <td>{{ $product_info->printing_finish }}</td>
                <td>{{ $product_info->sewing_planning }}</td>
                <td>{{ $product_info->sewing_start }}</td>
                <td>{{ $product_info->sewing_finish }}</td>
                <td>{{ $product_info->finishing_start }}</td>
                <td>{{ $product_info->finishing_finish }}</td>
                <td>{{ $product_info->shipment_planning }}</td>
                <td>{{ $product_info->shipment_start }}</td>
                <td>{{ $product_info->shipment_finish }}</td>
                <td>{{ $product_info->remarks }}</td>
                
                <td>     
                    <a class="btn btn-sm btn-primary" href="{{url('/product_add_dates')}}" role="button">Add Dates</a>
                    <a class="btn btn-sm btn-primary" href="{{url('/product_details_edit')}}" role="button">Edit</a>
                    <a class="btn btn-sm btn-primary" href="#" role="button">Delete</a>
                </td>
            </tr>
  
        </tbody>
        <!-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>