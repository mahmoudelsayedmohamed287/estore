<h1 class = "text-center"> Add faq</h1>
<form id="formAddAdderss" action="<?php echo URL. 'admin/faq/add' ?>" method="post" >  
<div class="container py-5">
    <div class="row">
<div class="col-12">
            <label>question *</label>
            <div class="form-group label-floating">
                    <textarea class = "form-control summernote" name="question"    required=""></textarea>
                </div>
                </div>
                <div class="col-12">
            <label>answer *</label>
            <div class="form-group label-floating">
                    <textarea class = "form-control summernote" name="answer"    required=""></textarea>
                </div>
                </div>
                <div class="col-md-12">
               <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            Add New faq 
                </button>
            </div>
        </div>
        </div>
        
        </form>