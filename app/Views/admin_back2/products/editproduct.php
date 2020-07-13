<h1 class = text-center> Edit product </h1> 
<br>
<form id="formAddAdderss" method="POST" action="<?php echo URL?>admin/product/update/<?=$rows->id?>"enctype="multipart/form-data">  

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <label>title *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="title" type="text" class="form-control" value="<?= $rows->title ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>price before *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="pricebefore" type="text" class="form-control" value="<?= $rows->price_before ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>price after *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="priceafter" type="text" class="form-control" value="<?= $rows->price_after ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>description *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="description" type="text" class="form-control" value="<?= $rows->description ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>specs*</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="specs" type="text" class="form-control" value="<?= $rows->specs ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>notes *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="notes" type="text" class="form-control" value="<?= $rows->notes ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>status *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="status" type="text" class="form-control" value="<?= $rows->status ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>attributes *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="attributes" type="text" class="form-control" value="<?= $rows->attrubites ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>quantity *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="quantity" type="text" class="form-control" value="<?= $rows->quantity ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>small description *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="smalldescription" type="text" class="form-control" value="<?= $rows->small_description ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
            <label>image *</label>
                <br>
            <div class="form-group label-floating is-empty">
            <input type="file" name="mainimg">
            </div>
            </div>
            <div class="col-md-8 col-xs-12">
        <label>order *</label>
        <select class = "form-control" name = "order">
        <option value = <?= $rows->latest?>><?=$rows->latest?></option>
           <option value = "0">none</option>
           <option value = "1">latest</option> 
           <option value = "2">coming</option>         
        </select>
        </div>
           
    
        
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" id="SubmitButton">
                            Update product
                </button>
            </div>
        </div>
    </div>

</form>