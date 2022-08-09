<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <form class="m-5">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <h4 class="mb-3">Add Product Information</h4>
            <a href="{{url('/product_user_view')}}" class="btn-close" aria-label="Close"></a>
        </div>
        <div class="row">
            <div class="col-12">
                <h5 class="mb-3 text-center">BUYER DETAILS and Product Infoemation</h5>
            </div>
            <div class="col-4">
                <h6>Select Name</h6>
                <select class="form-select mb-3" aria-label="Default select example" name="name">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-4 mb-3">
                <label for="order_no" class="form-label">Order No</label>
                <input type="text" class="form-control" id="order_no" name="order_no" aria-describedby="emailHelp">
            </div>
            <div class="col-4 mb-3">
                <label for="style" class="form-label">Style</label>
                <input type="text" class="form-control" id="style" name="style" aria-describedby="emailHelp">
            </div>
                <div class="col-6 mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" aria-describedby="emailHelp">
            </div>
            <div class="col-6 mb-3">
                <label for="product_img" class="form-label">Product Image</label>
                <input class="form-control" type="file" id="product_img" name="product_img">
            </div>
            <div class="col-6 mb-3">
                <label for="po_issue_date" class="form-label">Product Issue Date</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="po_issue_date" name="po_issue_date" aria-describedby="emailHelp">
            </div>
            <div class="col-6 mb-3">
                <label for="shipment_date" class="form-label">Shipment Date</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="shipment_date" name="shipment_date" aria-describedby="emailHelp">
            </div>
            <div class="col-6 mb-3">
                <label for="febric_details" class="form-label">Fabric/Yarn Details</label>
                <input type="text" class="form-control" id="febric_details" name="febric_details" aria-describedby="emailHelp">
            </div>
            <div class="col-6 mb-3">
                <label for="gsm" class="form-label">GSM</label>
                <input type="text" class="form-control" id="gsm" name="gsm" aria-describedby="emailHelp">
            </div>
            <div class="col-12 mb-3">
                <label for="description" class="form-label">Descriptions</label>
                <textarea class="form-control" id="description" name="description" rows="2"></textarea>
            </div>
            <div class="col-4 mb-3">
                <label for="size" class="form-label">Size</label>
                <input type="text" class="form-control" id="size" name="size" aria-describedby="emailHelp">
            </div>
            <div class="col-4 mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" aria-describedby="emailHelp">
            </div>
            <div class="col-4 mb-3">
                <label for="factory_name" class="form-label">Factory Name</label>
                <input type="text" class="form-control" id="factory_name" name="factory_name" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row">
            <h5 class="col-12 mb-3 text-center">Lab Dip Approval</h5>
            <div class="col-2 mb-3">
                <label for="plannig_lab" class="form-label">Lab Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="plannig_lab" name="plannig_lab" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="color_way" class="form-label">Color Way</label>
                <input type="text" class="form-control" id="color_way" name="color_way" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="print_stricke_offs" class="form-label">Print Stricke Offs</label>
                <input type="text" class="form-control" id="print_stricke_offs" name="print_stricke_offs" aria-describedby="emailHelp">
            </div>
            <div class="col-4 mb-3">
                <label for="comments_received" class="form-label">Comments Received</label>
                <textarea class="form-control" id="comments_received" name="comments_received" rows="2"></textarea>
            </div>
        </div>

        <div class="row">
            <h5 class="col-12 mb-3 text-center">Sampling</h5>
            <div class="col-3 mb-3">
                <label for="style_approval" class="form-label">Style Approval</label>
                <input type="text" class="form-control" id="style_approval" name="style_approval" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="style_comments" class="form-label">Style Comments</label>
                <textarea class="form-control" id="style_comments" name="style_comments" rows="2"></textarea>
            </div>
            <div class="col-3 mb-3">
                <label for="plannig_sample" class="form-label">Sample Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="plannig_sample" name="plannig_sample" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="pp_sample" class="form-label">PP Sample</label>
                <input type="text" class="form-control" id="pp_sample" name="pp_sample" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="pp_comments" class="form-label">PP Comments</label>
                <textarea class="form-control" id="pp_comments" name="pp_comments" rows="2"></textarea>
            </div>
            <div class="col-3 mb-3">
                <label for="production_sample" class="form-label">Production Sample</label>
                <input type="text" class="form-control" id="production_sample" name="production_sample" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="production_comments" class="form-label">Production Comments</label>
                <textarea class="form-control" id="production_comments" name="production_comments" rows="2"></textarea>
            </div>
        </div>

        <div class="row">
            <h5 class="col-12 mb-3 text-center">Accessories Details</h5>
            <div class="col-3 mb-3">
                <label for="main_label" class="form-label">MAIN LABEL</label>
                <input type="text" class="form-control" id="main_label" name="main_label" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="care_label" class="form-label">Care LABEL</label>
                <input type="text" class="form-control" id="care_label" name="care_label" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="size_label" class="form-label">Size LABEL</label>
                <input type="text" class="form-control" id="size_label" name="size_label" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="flag_label" class="form-label">Flag LABEL</label>
                <input type="text" class="form-control" id="flag_label" name="flag_label" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="patch_label" class="form-label">Patch LABEL</label>
                <input type="text" class="form-control" id="patch_label" name="patch_label" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="hang_tag" class="form-label">HANG TAG</label>
                <input type="text" class="form-control" id="hang_tag" name="hang_tag" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="hang_tag_string" class="form-label">HANG TAG String</label>
                <input type="text" class="form-control" id="hang_tag_string" name="hang_tag_string" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="eyelet" class="form-label">EYELET/BUTTON</label>
                <input type="text" class="form-control" id="eyelet" name="eyelet" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="elastic" class="form-label">ELASTIC</label>
                <input type="text" class="form-control" id="elastic" name="elastic" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="zipper" class="form-label">ZIPPER</label>
                <input type="text" class="form-control" id="zipper" name="zipper" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="poly" class="form-label">POLY</label>
                <input type="text" class="form-control" id="poly" name="poly" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="gum_tape" class="form-label">GUM TAPE</label>
                <input type="text" class="form-control" id="gum_tape" name="gum_tape" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="carton" class="form-label">CARTON</label>
                <input type="text" class="form-control" id="carton" name="carton" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="others" class="form-label">Others</label>
                <input type="text" class="form-control" id="others" name="others" aria-describedby="emailHelp">
            </div>

            <h5 class="col-12 mb-3 text-center">Fabric Details</h5>
            <div class="col-3 mb-3">
                <label for="yarn_planning" class="form-label">Yarn Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="yarn_planning" name="yarn_planning" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="knitting_planning" class="form-label">Knitting Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="knitting_planning" name="knitting_planning" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="dyeing_planning" class="form-label">Dyeing Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="dyeing_planning" name="dyeing_planning" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="deliver_cutting_planning" class="form-label">Fabric Store Deliver to cutting Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="deliver_cutting_planning" name="deliver_cutting_planning" aria-describedby="emailHelp">
            </div>

            <h5 class="col-12 mb-3 text-center">Production Status</h5>
            <div class="col-3 mb-3">
                <label for="cutting_planning" class="form-label">Cutting and Printing Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="cutting_planning" name="cutting_planning" aria-describedby="emailHelp">
            </div>
            <!-- <div class="col-3 mb-3">
                <label for="printing_planning" class="form-label">Printing Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="printing_planning" name="printing_planning" aria-describedby="emailHelp">
            </div> -->
            <div class="col-3 mb-3">
                <label for="sewing_planning" class="form-label">Sewing and Finishing Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="sewing_planning" name="sewing_planning" aria-describedby="emailHelp">
            </div>
            <!-- <div class="col-3 mb-3">
                <label for="finishing_planning" class="form-label">Finishing Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="finishing_planning" name="finishing_planning" aria-describedby="emailHelp">
            </div> -->
            <div class="col-3 mb-3">
                <label for="shipment_planning" class="form-label">Shipment Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="shipment_planning" name="shipment_planning" aria-describedby="emailHelp">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('/product_user_view')}}" class="btn btn-secondary">Cancel</a>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>