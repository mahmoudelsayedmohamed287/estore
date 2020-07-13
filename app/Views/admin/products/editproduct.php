<h1 class = text-center> Edit product </h1> 
<br>
<form id="formAddAdderss" method="POST" action="<?php echo URL?>admin/product/update/<?=$rows->id?>"enctype="multipart/form-data">  

    <div class="container py-5">
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
                <label>specs*</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="specs" type="text" class="form-control" value="<?= $rows->specs ?>" required>
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
                <label>small description *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="smalldescription" type="text" class="form-control" value="<?= $rows->small_description ?>" required>
                </div>
            </div>
            <div class="col-md-8"  id="cont">
            <label for="validationCustom03">attributes*</label>
                <div class="row align-items-end">
              
                <?php foreach(json_decode($rows->attrubites )as $key=>$value):?>
                        <div class="col-md-3 mb-3">
                        <input name="key[]"  type="text" class="form-control"  value="<?=$key ?>">
                        </div>
                        <div class="col-md-3 mb-3">
                        <input name="value[]"  type="text" class="form-control"   value="<?= $value?>">
                        </div>
                        <?php endforeach;?>
                        <div class="col-md-6 mb-3">
                            <button type="button" class="add-line w-100 btn btn-primary">add line</button>
                        </div>
                    </div>
                </div>
  
 
            <div class="col-md-4 col-xs-12">
                <label>quantity *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="quantity" type="text" class="form-control" value="<?= $rows->quantity ?>" required>
                </div>
            </div>
            
            <div class="col-12">
                <label>notes *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <textarea name="notes" class="form-control summernote" ><?= $rows->notes ?></textarea>
                </div>
            </div>
        <div class="col-12">
                <label>description *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <textarea name="description" class="form-control summernote" ><?= $rows->description ?></textarea>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
        <label>order *</label>
        <select class = "form-control" name = "order">
        <option value="0"<?php if($rows->latest == '0') { ?> selected="selected"<?php } ?>>none</option>
        <option value="1"<?php if($rows->latest == '1') { ?> selected="selected"<?php } ?>>latest</option>
        <option value="2"<?php if($rows->latest == '2') { ?> selected="selected"<?php } ?>>coming</option>        
        </select>
        </div>
            <div class="col-md-8 col-xs-12">
                <div class="row">
                    <div class="col-md-6">
                      <label>image *</label>
                    <br>
                <img src=<?= URL.$rows->image?> alt="" width = "50" height = "50">
                    <br>
                <div class="form-group label-floating is-empty">
                <input type="file" name="mainimg">
                </div>
          </div>
            
            <div class="col-md-6">
            <label>gellery  *</label>
            <br>
            <?PHP foreach(unserialize($rows->image_group) as $img):?>
             <img src="<?= URL .'img/product/'.$img?>" alt="" width = "50" height = "50">
             <?php endforeach;?>
            <div class="form-group label-floating is-empty">
            <input type="file"  name="img[]" multiple >
            </div>
            </div>
            </div>
            </div>
            </div>
            
           
    
        
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" id="SubmitButton">
                            Update product
                </button>
            </div>
        </div>
    </div>

</form>