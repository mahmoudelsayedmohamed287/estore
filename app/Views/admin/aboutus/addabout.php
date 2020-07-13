<h1 class = "text-center"> Add aboutus</h1>
<form id="formAddAdderss" action="<?php echo URL. 'admin/aboutus/add' ?>" method="post" >  
<div class="container py-5">
    <div class="row">
<div class="col-12">
            <label>title *</label>
            <div class="form-group label-floating">
                    <textarea class = "form-control summernote" name="tittle"    required=""></textarea>
                </div>
                </div>
                <div class="col-12">
            <label>breif *</label>
            <div class="form-group label-floating">
                    <textarea class = "form-control summernote" name="brief"    required=""></textarea>
                </div>
                </div>
                <div class="col-md-12">
               <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            Add New aboutus 
                </button>
            </div>
        </div>
        </div>
        
        </form>