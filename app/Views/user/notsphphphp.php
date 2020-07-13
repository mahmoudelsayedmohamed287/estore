      <?php foreach($settings['prusher'] as $order) {
        
              $orderDetailes = json_decode($order->order_detailes);
              for($i = 0; $i < count($orderDetailes->product_id); $i++){
               
                ?>
                <tr>
              <th scope="row"><?php echo  $order->order_number ?></th>
             <!-- <td><?php echo $orderDetailes->product_id[$i] ?></td>  -->
              <td><?php echo $orderDetailes->product_count[$i]?></td>
              <td><?php echo $orderDetailes->product_name[$i]?></td>
              <!-- <td><?php echo$orderDetailes->product_name[$i]?></td> -->
              <td>$<?php echo $orderDetailes->product_price[$i]?></td> 
              <td>on Shipping</td>
              <td>
              <?php 
              if(count($settings['reviewForThisOrder']) < 0){?>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addreview<?php echo $orderDetailes->product_id[$i]?>">
                <i class="fa fa-edit"></i>
             </button>
              <?php }?>

              <?php  foreach($settings['reviewForThisOrder'] as $review){
                        if($review->product_id === $orderDetailes->product_id[$i]){
                             echo $review->rating;
                        }
                 }

              
              ?>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addreview<?php echo $orderDetailes->product_id[$i]?>">
                <i class="fa fa-edit"></i>
             </button>
              </td>
            
            </tr>

          <?php   ?>
          
        
<!-- Modal -->
<div class="modal fade" id="addreview<?php echo $orderDetailes->product_id[$i]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addreview">Add your review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo 'Profile/saveReview/'.$orderDetailes->product_id[$i]?>">

      
       <input type="text" required name="review_num" placeholder="Write your review" class="single-input">
       <textarea col='5' name="review_text" rows='5' class="form-controll">

       </textarea>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Review</button>
      </div>
      </form>
    </div>
  </div>
</div>
        
        
        
        
        
        
       <?php }}

        ?>