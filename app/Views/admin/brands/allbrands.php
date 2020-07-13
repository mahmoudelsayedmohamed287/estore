<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All Brands</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tittle</th>
                        <th>image</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
               <?php      foreach($rows as $row){ ?>
                    <tr>
                        <td><?= $row->id ?></td>
                        <td><?= $row->title ?></td>
                       <td><img src=<?= URL.$row->image?> alt="" width = "50" height = "50"></td>
                        
                        
                        <td>
                            <a  href="<?=  URL?>admin/Brand/edit/<?=$row->id?>"  >Edit</a>  
                            <a  href="<?= URL ?>admin/Brand/delete/<?=$row->id?>" >Delete</a>
                            
                            
                        </td>
                       
                      
                    </tr>
                    <?php 
               }
                    ?>
                </tbody>
            </table>
            <a class = "btn btn-primary" href="<?= URL ?>admin/Brand/create" >Add new brand</a>
           

        </div>
    </div>
    
    
                        
                    
    

