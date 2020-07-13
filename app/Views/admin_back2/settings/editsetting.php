<h1 class = text-center> Edit setting </h1> 
<br>
<form id="formAddAdderss" method="POST" action="<?php echo URL?>admin/setting/update/<?=$rows->id?>">  

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <label>logo *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="logo" type="text" class="form-control" value="<?= $rows->logo ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>title *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="title" type="text" class="form-control" value="<?= $rows->title ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>abouts *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="abouts" type="text" class="form-control" value="<?= $rows->abouts ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>newsletter_email *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="newsletter_email" type="text" class="form-control" value="<?= $rows->newsletter_email ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>inst_logins*</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="insta_logins" type="text" class="form-control" value="<?= $rows->insta_logins ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>footer *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="footer" type="text" class="form-control" value="<?= $rows->footer ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>facebook *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="facebook" type="text" class="form-control" value="<?= $rows->facebook ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>twitter *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="twitter" type="text" class="form-control" value="<?= $rows->twitter ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>instagram *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="instagram" type="text" class="form-control" value="<?= $rows->instagram ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>youtube *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="youtube" type="text" class="form-control" value="<?= $rows->youtube ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>currency*</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="currency" type="text" class="form-control" value="<?= $rows->currency ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>email_address *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="email_address" type="text" class="form-control" value="<?= $rows->email_address ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>address *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="address" type="text" class="form-control" value="<?= $rows->address?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>phone *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="phone" type="text" class="form-control" value="<?= $rows->phone ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>favicon *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="favicon" type="text" class="form-control" value="<?= $rows->favicon ?>" required>
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
                <label>address_2 *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="address_2" type="text" class="form-control" value="<?= $rows->address_2 ?>" required>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <label>time_of_work *</label>
                    <br>
                <div class="form-group label-floating is-empty">
                    <input name="time_of_work" type="text" class="form-control" value="<?= $rows->time_of_work ?>" required>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <label>Date to start weeks deal *</label>
                    <br>
                <div class="form-group label-floating is-empty"> deals time is : <?= $rows->Date ?>
                    <input name="date" type= "datetime-local" class="form-control" value="<?= $rows->Date ?>" required>
                </div>
            </div>
           
    
        
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" id="SubmitButton">
                            Update setting
                </button>
            </div>
        </div>
    </div>

</form>