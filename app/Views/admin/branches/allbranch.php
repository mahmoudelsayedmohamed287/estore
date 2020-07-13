<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All branches</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Head</th>
                        <th>Address</th>
                        <th>telephone</th>
                        <th>working_hours</th>
                        <th>link</th>
                        <th>control</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                
               <?php      foreach($rows as $row){ ?>
                    <tr>
                        <td><?= $row->head ?></td>
                        <td><?= $row->address ?></td>
                        <td><?= $row->telephone ?></td>
                        <td><?= $row->working_hours ?></td>
                        <td><?= $row->link ?></td>
                       
                        
                      
                        <td>
                            <a  href="<?=  URL?>admin/branches/edit/<?=$row->id?>" >Edit</a>  
                            <a  href="<?= URL ?>admin/branches/delete/<?=$row->id?>">Delete</a>
                            
                            
                        </td>
                        
                        
                       

                      
                    </tr>
                    <?php 
               }
                    ?>
                </tbody>
            </table>
            <a class = "btn btn-primary" href="<?= URL ?>admin/branches/create" >Add new branch</a>
           

        </div>
    </div>
    
    
                        
                    
    

