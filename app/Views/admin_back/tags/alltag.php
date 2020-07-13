<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All tags</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tittle</th>
                        <th>category name</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                
               <?php      foreach($rows as $row){ ?>
                    <tr>
                        <td><?= $row->id ?></td>
                        <td><?= $row->title ?></td>
                        <td><?= $row->category_name ?></td>
                        
                      
                        <td>
                            <a  href="<?=  URL?>admin/tags/edit/<?=$row->id?>" class="edit open-modal" data-toggle="modal" >Edit</a>  
                            <a  href="<?= URL ?>admin/tags/delete/<?=$row->id?>" class="delete" data-toggle="modal">Delete</a>
                            
                            
                        </td>
                        
                        
                       

                      
                    </tr>
                    <?php 
               }
                    ?>
                </tbody>
            </table>
            <a class = "btn btn-primary" href="<?= URL ?>admin/tags/create" >Add new tag</a>
           

        </div>
    </div>
    
    
                        
                    
    

