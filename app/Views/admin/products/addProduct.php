<h1 class = "text-center"> Add product</h1>
<form id="formAddAdderss" action="<?php echo URL. 'admin/product/add' ?>" method="post" enctype="multipart/form-data">  
<div class="container py-5">
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <label>title *</label>
                <br>
            <div class="form-group label-floating is-empty">
                <input name="title" type="text" class="form-control" required>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <label>price before *</label>
            <div class="form-group label-floating is-empty">
                <input name="pricebefore" type="number" class="form-control" required>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <label> price after *</label>
            <div class="form-group label-floating is-empty">
                <input name="priceafter" type="number" class="form-control" required>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <label>specs *</label>
            <div class="form-group label-floating">
                    <input name="specs"  type="text" class="form-control"  required="">
                </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <label>quantity *</label>
            <div class="form-group label-floating">
                    <input name="quantity"  type="text" class="form-control"  required="">
                </div>
                </div>
                <div class="col-md-4 col-xs-12">
            <label>small description *</label>
            <div class="form-group label-floating">
                    <input name="smalldescription"  type="text" class="form-control"  required="">
                </div>
                </div>
                <div class="col-md-4 col-xs-12">
            <label>status *</label>
            <div class="form-group label-floating">
                    <input name="status"  type="text" class="form-control"  required="">
                </div>
                </div>
                <div class="col-md-8"  id="cont">
                <div class="row align-items-end">
    <div class="col-md-3 mb-3">
      <label for="validationCustom03">attributes*</label>
      <input name="key[]"  type="text" class="form-control"  required="">
    </div>
    <div class="col-md-3 mb-3">
    <input name="value[]"  type="text" class="form-control"  required="">
    </div>
    <div class="col-md-6 mb-3">
        <button type="button" class="add-line w-100 btn btn-primary">add line</button>
    </div>
  </div>
 </div>
                <div class="col-12">
            <label>description *</label>
            <div class="form-group label-floating">
                    <textarea  class = "form-control summernote " name="description"     required=""></textarea>
                </div>
        </div>
        <div class="col-12">
            <label>notes *</label>
            <div class="form-group label-floating">
                    <textarea class = "form-control summernote" name="notes"    required=""></textarea>
                </div>
                </div>
        <div class="col-md-6 col-xs-12">
        <label>category *</label>
        <select class = "form-control" name = "category">
           <option value = "0">...</option>
           <?php foreach($cats as $cat):?>
            <option value ="<?php echo  $cat->id?>"><?php echo $cat->title?></option> 
                  <?php endforeach;?>          
        </select>
        </div>
        <div class="col-md-6 col-xs-12">
        <div class="mb-3">
        <label>order *</label>
        <select class = "form-control" name = "order">
           <option value = "0">...</option>
           <option value = "1">latest</option> 
           <option value = "2">coming</option>         
        </select>
        </div>
        </div>

            <div class="col-md-6 col-xs-12">
            <label>image *</label>
            <div class="form-group label-floating is-empty">
            <input type="file" name="mainimg" required>
            </div>
            </div>
            <div class="col-md-6 col-xs-12">
            <label>gellery  *</label>
            <div class="form-group label-floating is-empty">
            <input type="file" name="img[]" multiple required>
            </div>
            </div>
        
        

        <div class="col-md-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            Add New product  
                </button>
            </div>
        </div>
        </div>
        
        </form>

        