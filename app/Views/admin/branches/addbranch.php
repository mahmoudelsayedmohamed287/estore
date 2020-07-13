<h1 class = "text-center"> Add new branch</h1>
<form id="formAddAdderss" action="<?php echo URL. 'admin/branches/add' ?>" method="post" >  
<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <label>Head *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="head" type="text" class="form-control" required>
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <label>Address *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="address" type="address" class="form-control">
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <label> telephone *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name=" telephone" type="telephone" class="form-control">
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <label> working_hours *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="working_hours" type="time" class="form-control">
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <label>link *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="link" type="link" class="form-control">
            </div>
        </div>
       
       
        <div class="col-md-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            Add New branch 
                </button>
            </div>
        </div>
        </div>
        
        </form>
       
        