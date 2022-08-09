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
            <h4 class="mb-3">Add After Product Information</h4>
            <a href="{{url('/product')}}" class="btn-close" aria-label="Close"></a>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="row">
                    <h5 class="col-12 mb-3 text-center">Lab Dip Approval</h5>
                    <div class="col-6 mb-3">
                        <label for="plannig_lab" class="form-label">Lab Planning</label>
                        <input type="date" onfocus="this.showPicker()" class="form-control" id="plannig_lab" name="plannig_lab" aria-describedby="emailHelp">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="lab_received" class="form-label">Lab Info Received</label>
                        <input type="date" onfocus="this.showPicker()" class="form-control" id="lab_received" name="lab_received" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <h5 class="col-12 mb-3 text-center">Sampling</h5>
                    <div class="col-6 mb-3">
                        <label for="plannig_sample" class="form-label">Sample Planning</label>
                        <input type="date" onfocus="this.showPicker()" class="form-control" id="plannig_sample" name="plannig_sample" aria-describedby="emailHelp">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="sample_received" class="form-label">Sample Received</label>
                        <input type="date" onfocus="this.showPicker()" class="form-control" id="sample_received" name="sample_received" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
        </div>

        

        <div class="row"> 
            <h5 class="col-12 mb-3 text-center">Fabric Details</h5>
            <div class="col-3 mb-3">
                <label for="yarn_planning" class="form-label">Yarn Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="yarn_planning" name="yarn_planning" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="yarn_start" class="form-label">Yarn Start</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="yarn_start" name="yarn_start" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="yarn_finish" class="form-label">Yarn Finish</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="yarn_finish" name="yarn_finish" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="knitting_planning" class="form-label">Knitting Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="knitting_planning" name="knitting_planning" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="knitting_start" class="form-label">Knitting Start</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="knitting_start" name="knitting_start" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="knitting_finish" class="form-label">Knitting Finish</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="knitting_finish" name="knitting_finish" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="dyeing_planning" class="form-label">Dyeing Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="dyeing_planning" name="dyeing_planning" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="dyeing_start" class="form-label">Dyeing Start</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="dyeing_start" name="dyeing_start" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="dyeing_finish" class="form-label">Dyeing Finish</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="dyeing_finish" name="dyeing_finish" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="deliver_cutting_planning" class="form-label">Fabric Store Deliver to cutting Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="deliver_cutting_planning" name="deliver_cutting_planning" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="deliver_cutting_received" class="form-label">Fabric Store Deliver to cutting Received</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="deliver_cutting_received" name="deliver_cutting_received" aria-describedby="emailHelp">
            </div>

            <h5 class="col-12 mb-3 text-center">Production Status</h5>
            <div class="col-3 mb-3">
                <label for="cutting_planning" class="form-label">Cutting and Printing Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="cutting_planning" name="cutting_planning" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="cutting_start" class="form-label">Cutting Start</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="cutting_start" name="cutting_start" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="cutting_finish" class="form-label">Cutting Finish</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="cutting_finish" name="cutting_finish" aria-describedby="emailHelp">
            </div>
            <!-- <div class="col-3 mb-3">
                <label for="printing_planning" class="form-label">Printing Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="printing_planning" name="printing_planning" aria-describedby="emailHelp">
            </div> -->
            <div class="col-3 mb-3">
                <label for="printing_start" class="form-label">Printing Start</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="printing_start" name="printing_start" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="printing_finish" class="form-label">Printing Finish</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="printing_finish" name="printing_finish" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="sewing_planning" class="form-label">Sewing and Finish Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="sewing_planning" name="sewing_planning" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="sewing_start" class="form-label">Sewing Start</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="sewing_start" name="sewing_start" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="sewing_finish" class="form-label">Sewing Finish</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="sewing_finish" name="sewing_finish" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="finishing_start" class="form-label">Finishing Start</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="finishing_start" name="finishing_start" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="finishing_finish" class="form-label">Finishing Finish</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="finishing_finish" name="finishing_finish" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="shipment_planning" class="form-label">Shipment Planning</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="shipment_planning" name="shipment_planning" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="shipment_start" class="form-label">Shipment Start</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="shipment_start" name="shipment_start" aria-describedby="emailHelp">
            </div>
            <div class="col-3 mb-3">
                <label for="shipment_finish" class="form-label">Shipment Finish</label>
                <input type="date" onfocus="this.showPicker()" class="form-control" id="shipment_finish" name="shipment_finish" aria-describedby="emailHelp">
            </div>
            <div class="col-9 mb-3">
                <label for="remarks" class="form-label">Remarks</label>
                <textarea class="form-control" id="remarks" name="remarks" rows="2"></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('/product')}}" class="btn btn-secondary">Cancel</a>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>