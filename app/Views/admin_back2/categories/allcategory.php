<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All categories</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tittle</th>
                        <th>description</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
               <?php      foreach($rows as $row){ ?>
                    <tr>
                        <td><?= $row->id ?></td>
                        <td><?= $row->title ?></td>
                        <td><?= $row->description ?></td>
                      
                        <td>
                            <a  href="<?=  URL?>admin/category/edit/<?=$row->id?>" class="edit open-modal" data-toggle="modal" >Edit</a>  
                            <a  href="<?= URL ?>admin/category/delete/<?=$row->id?>" class="delete" data-toggle="modal">Delete</a>
                            
                            
                        </td>
                        
                        
                       

                      
                    </tr>
                    <?php 
               }
                    ?>
                </tbody>
            </table>
            <a class = "btn btn-primary" href="<?= URL ?>admin/category/create" >Add new category</a>
           

        </div>
    </div>
    
    
                        
                    
    

