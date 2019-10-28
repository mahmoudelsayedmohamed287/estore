<h1 class = "text-center"> Add new brand</h1>
<form id="formAddAdderss" action="<?php echo URL. 'admin/brand/add' ?>"  method="post" enctype="multipart/form-data">  
<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <label>title *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="title" type="text" class="form-control" required>
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <label>notes *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="notes" type="notes" class="form-control" required>
            </div>
        </div>

        <div class="col-md-8 col-xs-12">
            <label>image *</label>
                <br>
            <div class="form-group label-floating is-empty">
            <input type="file" name="image">
            </div>
        </div>
       
        <div class="col-md-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            Add New brand  
                </button>
            </div>
        </div>
        </div>
        
        </form>
       
        