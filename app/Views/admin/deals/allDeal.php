
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All Deals</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>product_name</th>
                        <th>Product_image</th>
                        <th>Product_price_after</th>
                        <th>Product_price_before</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
               <?php      foreach($rows as $row){ ?>
                    <tr>
                        
                        <td><?= $row->products_name ?></td>
                        <td><img src=<?= URL.$row->products_image?> alt="" width = "50" height = "50"></td>
                        <td><?= $row->products_after ?></td>
                        <td><?= $row->products_before ?></td>
                        <td>
                              
                            <a  href="<?= URL ?>admin/deals/delete/<?=$row->id?>" >Delete</a>
                            
                            
                        </td>
                        
                        
                       

                      
                    </tr>
                    <?php 
               }
                    ?>
                </tbody>
            </table>
            <a class = "btn btn-primary" href="<?= URL ?>admin/deals/create" >Add new product</a>
           

        </div>
    </div>
    
    
                        
                    
    

