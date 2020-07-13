
<br>
<br>

<form id="formAddAdderss" method="POST"  action="<?php echo URL?>admin/aboutus/update/<?=$rows->id?>">  

    <div class="container">
        <div class="row">
        <div class="col-12">
                <label>title *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <textarea name="tittle" class="form-control summernote" ><?= $rows->tittle ?></textarea>
                </div>
            </div>
            <div class="col-12">
                <label>breif *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <textarea name="brief" class="form-control summernote" ><?= $rows->brief ?></textarea>
                </div>
            </div>
            
          
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" id="SubmitButton">
                            Update aboutus
                </button>
            </div>
        </div>
    </div>

</form>