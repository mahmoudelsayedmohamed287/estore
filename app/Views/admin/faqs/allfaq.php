<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2> All faqs</h2>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>question</th>
                        <th>answer</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
               <?php      foreach($rows as $row){ ?>
                    <tr>
                        <td><?= $row->question ?></td>
                        <td><?= $row->answer ?></td>
                       
                        
                        
                        <td>
                            <a  href="<?=  URL?>admin/faq/edit/<?=$row->id?>"  >Edit</a>  
                            <a  href="<?= URL ?>admin/faq/delete/<?=$row->id?>" >Delete</a>
                            
                            
                        </td>
                       
                      
                    </tr>
                    <?php 
               }
                    ?>
                </tbody>
            </table>
            <a class = "btn btn-primary" href="<?= URL ?>admin/faq/create" >Add new faq</a>
           

        </div>
    </div>
    
    
                        
                    
    

