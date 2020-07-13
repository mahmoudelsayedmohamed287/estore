<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All settings</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>logo</th>
                        <th>title</th>
                        <th>address</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
               <?php      foreach($rows as $row){ ?>
                    <tr>
                        
                        <td><?= $row->logo ?></td>
                        <td><?= $row->title ?></td>
                        <td><?= $row->address ?></td>
                        
                        
                      
                        <td>
                            <a  href="<?=  URL?>admin/setting/edit/<?=$row->id?>" >Edit</a>  
                            
                            
                            
                        </td>
                        
                        
                       

                      
                    </tr>
                    <?php 
               }
                    ?>
                </tbody>
            </table>
          
    </div>
    
    
                        
                    
    

