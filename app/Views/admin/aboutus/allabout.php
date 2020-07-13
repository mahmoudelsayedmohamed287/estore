<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All Aboutus</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>Tittle</th>
                        <th>breif</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
               <?php      foreach($rows as $row){ ?>
                    <tr>
                        <td><?= $row->tittle ?></td>
                        <td><?= $row->brief  ?></td>
                       
                        
                        
                        <td>
                            <a  href="<?=  URL?>admin/aboutus/edit/<?=$row->id?>"  >Edit</a>  
                            <a  href="<?= URL ?>admin/aboutus/delete/<?=$row->id?>" >Delete</a>
                            
                            
                        </td>
                       
                      
                    </tr>
                    <?php 
               }
                    ?>
                </tbody>
            </table>
            <a class = "btn btn-primary" href="<?= URL ?>admin/aboutus/create" >Add new about</a>
           

        </div>
    </div>
    
    
                        
                    
    

