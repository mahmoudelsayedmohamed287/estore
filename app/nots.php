// default page 

<?php if(!empty($setting['alert'])):?>
<div class="alert alert-danger" role="alert">
  <?= $setting['alert']?>
</div>
<?php endif;?>
<?php if(!empty($data)):?>
<div class="alert alert-success" role="alert">
  <?= $data?>
</div>
<?php endif;?>