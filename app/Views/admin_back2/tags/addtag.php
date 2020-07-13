<h1 class = "text-center"> Add new tag</h1>
<form id="formAddAdderss" action="<?php echo URL. 'admin/tags/add' ?>" method="post">  
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
        <select class = "form-control" name = "category">
           <option value = "0">select category</option>
           <?php foreach($categories as $category){
           echo '<option value = "'.$category->id.'">'.$category->title.'</option>';
           }
           ?>                  
        </select>
        </div>
        
        <div class="col-md-5 mt-1 col-xs-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            Add New brand  
                </button>
            </div>
        </div>
        </div>
        
        </form>
       
        