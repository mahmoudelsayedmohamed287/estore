
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All products</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>Tittle</th>
                        <th>Price Befor</th>
                        <th>Price After</th>
                        <th>latest</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
               <?php      foreach($rows as $row){ ?>
                    <tr>
                        
                        <td><?= $row->title ?></td>
                        <td><?= $row->price_before ?></td>
                        <td><?= $row->price_after ?></td>
                        <td><?= $row->latest ?></td>
                        <td>
                            <a  href="<?=  URL?>admin/product/edit/<?=$row->id?>" class="edit open-modal" data-toggle="modal" >Edit</a>  
                            <a  href="<?= URL ?>admin/product/delete/<?=$row->id?>" class="delete" data-toggle="modal">Delete</a>
                            
                            
                        </td>
                        
                        
                       

                      
                    </tr>
                    <?php 
               }
                    ?>
                </tbody>
            </table>
            <a class = "btn btn-primary" href="<?= URL ?>admin/product/create" >Add new product</a>
           

        </div>
    </div>
    
    
                        
                    
    

