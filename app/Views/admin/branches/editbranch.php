<br>
<form id="formAddAdderss" method="POST" action="<?php echo URL?>admin/branches/update/<?=$rows->id?>">  

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <label>Head *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="head" type="text" class="form-control" value="<?= $rows->head ?>" >
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <label>Address *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="address" type="text" class="form-control" value="<?= $rows->address ?>" >
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <label>telephone *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="telephone" type="text" class="form-control" value="<?= $rows->telephone ?>" >
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <label>working_hours *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="working_hours" type="text" class="form-control" value="<?= $rows->working_hours ?>" >
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <label>link *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="link" type="text" class="form-control" value="<?= $rows->link ?>" >
                </div>
            </div>
           
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" id="SubmitButton">
                            Update branch 
                </button>
            </div>
        </div>
    </div>

</form>