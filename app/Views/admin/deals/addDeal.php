<h1 class = "text-center"> Add Deal_product</h1>
<form id="formAddAdderss" action="<?php echo URL. 'admin/deals/add' ?>" method="post" enctype="multipart/form-data">  
<div class="container">
    <div class="row">
       
        <div class="col-md-8 col-xs-12">
        <label>products *</label>
        <select class = "form-control" name = "products">
           <option value = "0">...</option>
           <?php foreach($products as $product):?>
            <option value ="<?php echo  $product->id?>"><?php echo $product->title?></option> 
                  <?php endforeach;?>          
        </select>
        </div>

        <div class="col-md-12">
        <button type="submit" value="add" class="btn btn-success" id="SubmitButton">
                            Add New Deal  
                </button>
            </div>
        </div>
        </div>
        
        </form>
       
        