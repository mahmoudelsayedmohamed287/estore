
<br>
<br>
<br>
<br>

<form id="formAddAdderss" method="POST" action="<?php echo URL?>admin/brand/update/<?=$data['id']?>">  

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
                <label>notes *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="notes" type="text" class="form-control" value="<?= $rows->notes ?>" required>
                </div>
            </div>
          
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" id="SubmitButton">
                            Update brand 
                </button>
            </div>
        </div>
    </div>

</form>