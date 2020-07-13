
<br>
<br>
<br>
<br>

<form id="formAddAdderss" method="POST"enctype="multipart/form-data" action="<?php echo URL?>admin/category/update/<?=$rows->id?>">  

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
                <label>notes *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="notes" type="text" class="form-control" value="<?= $rows->notes ?>" required>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <label>description *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="description" type="text" class="form-control" value="<?= $rows->description ?>" required>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
            <label>image *</label>
                <br>
            <div class="form-group label-floating is-empty">
            <img src =<?= URL.$rows->image?> alt="" width = "50" height = "50">
            <br>
            <input type="file" name="mainimg" >
            </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" id="SubmitButton">
                            Update category 
                </button>
            </div>
        </div>
    </div>

</form>