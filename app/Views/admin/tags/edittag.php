<br>
<br>
<br>
<br>

<form id="formAddAdderss" method="POST" action="<?php echo URL?>admin/tags/update/<?=$data['id']?>">  

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <label>title *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="title" type="text" class="form-control" value="<?= $rows->title ?>" required>
                </div>
            </div>
           
            <div class="col-md-8 col-xs-12">
        <select class = "form-control" name = "category">
        <?php  $selected = '';?>
           <?php foreach($all as $al){
            if($al->id == $rows->category_id){
                $selected = "selected";
            }?>
            <option <?= $selected?>  value ="<?=$al->category_id?>"><?=$al->category_name?></option>
      <?php  }
           ?>                  
        </select>
        </div>
        
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" id="SubmitButton">
                            Update tag
                </button>
            </div>
        </div>
    </div>

</form>