
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
                        <th>image</th>
                        <th>image_group</th>
                        <th>Avaliable IN Store</th>
                        <th>order</th>
                        <th>control</th>
                        
                    </tr>
                </thead>
                <tbody>
                
               <?php      foreach($rows as $row){ ?>
                    <tr>
                        
                        <td><?= $row->title ?></td>
                        <td><?= $row->price_before ?></td>
                        <td><?= $row->price_after ?></td>
                        <td><img src=<?= URL.$row->image?> alt="" width = "50" height = "50"></td>
                        <td>
                        <?PHP foreach(unserialize($row->image_group) as $img):?>
                         <img src="<?= URL .'img/product/'.$img?>" alt="" width = "50" height = "50">
                         <?php endforeach;?>
                        </td>
                        <td><?= $row->quantity ?></td>
                        <td><?php if( $row->latest==1 ){
                            echo "latest";
                        }elseif($row->latest==0){
                            echo "none";

                        }else{
                            echo "coming";
                        }
                         ?>
                        
                        </td>
                        <td>
                            <a  href="<?=  URL?>admin/product/edit/<?=$row->id?>" >Edit</a>  
                            <a  href="<?= URL ?>admin/product/delete/<?=$row->id?>">Delete</a>
                            
                            
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
    
    
                        
                    
    

