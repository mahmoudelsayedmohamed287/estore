
<br>
<br>

<form id="formAddAdderss" method="POST"  action="<?php echo URL?>admin/faq/update/<?=$rows->id?>">  

    <div class="container">
        <div class="row">
        <div class="col-12">
                <label>question *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <textarea name="question" class="form-control summernote" ><?= $rows->question ?></textarea>
                </div>
            </div>
            <div class="col-12">
                <label>answer  *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <textarea name="answer" class="form-control summernote" ><?= $rows->answer ?></textarea>
                </div>
            </div>
            
          
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" id="SubmitButton">
                            Update faq
                </button>
            </div>
        </div>
    </div>

</form>