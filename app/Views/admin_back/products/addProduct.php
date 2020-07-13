<h1 class = "text-center"> Add product</h1>
<form id="formAddAdderss" action="<?php echo URL. 'admin/product/add' ?>" method="post" enctype="multipart/form-data">  
<div class="container">
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
            <label>description *</label>
            <div class="form-group label-floating">
                    <input name="description"  type="text" class="form-control"  required="">
                </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <label>specs *</label>
            <div class="form-group label-floating">
                    <input name="specs"  type="text" class="form-control"  required="">
                </div>
        </div>
        <div class="col-md-4 col-xs-12">
            <label>notes *</label>
            <div class="form-group label-floating">
                    <input name="notes"  type="text" class="form-control"  required="">
                </div>
                </div>
                <div class="col-md-4 col-xs-12">
            <label>status *</label>
            <div class="form-group label-floating">
                    <input name="status"  type="text" class="form-control"  required="">
                </div>
                </div>
                <div class="col-md-4 col-xs-12">
            <label>attributes*</label>
            <div class="form-group label-floating">
                    <input name="attributes"  type="text" class="form-control"  required="">
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
                
                <div class="col-md-8 col-xs-12">
            <label>image *</label>
                <br>
            <div class="form-group label-floating is-empty">
            <input type="file" name="mainimg" required>
            </div>
            <label>gellery  *</label>
            <div class="form-group label-floating is-empty">
            <input type="file" name="img[]" multiple required>
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
        <label>order *</label>
        <select class = "form-control" name = "order">
           <option value = "0">...</option>
           <option value = "1">latest</option> 
           <option value = "2">coming</option>         
        </select>
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
       
        