// function cartAction(action,product_id,msg){
//     var queryString = "";
//          if(action !== ''){
//            switch(action){
//              case 'add':
//                queryString = "action="+action +'&productId='+product_id+'&quantity='+$('#quantity').val()+ '&msg='+msg;
//                break;
//             case "remove":
//                 queryString = "action="+action+'&productId='+product_id + '&msg='+msg;
//             break;
               
//            }
//          }
        
//          jQuery.ajax({
//            url: '/estore/product/Cart/addToCart',
//            data:queryString,
//            type:"POST",
//            success:function(data){
//               // msg = 'item added successfuly';
//             // $('.alert-success').html(msg);
//             // console.log(data);
            
//            },
//            error:function(){
//                console.log('error')
//            }

//          });
         

    
//   }

  // $('.addItemTocart').click(function(){
  //   cartAction('add', $(this).data('id'), 'added to cart');
  // });
$(document).ready(function(){

 $('#pay').click(function(){
     $.ajax({
         url:'Checkout/CheckoutStatus',
         method:"POST",
         data:{action:'order'},
         success:function(data){

         localStorage.removeItem('cart');
         window.location = 'Product/confirm';
        
        
         },
         error:function(data){
             alert(data);
             console.log(data);
         }
     })
  
 })

                function filter_data()
                {
                    var lowerValue =   document.getElementById('lower-value').innerText;
                    var upperValue =   document.getElementById('upper-value').innerText;
                    var brands     =   get_filter('brand');
                    var categorys  =   get_filter('tag');

                    
                    $.ajax({
                        url:'Catagory/search',
                        method:"POST",
                        data:{lowerValue:lowerValue, upperValue :upperValue , brands:brands, categorys :categorys,action:'search' },
                        success:function(data){
                         $('.category-list .row').html(data);
                        },
                        error:function(error){
                            console.log(error);
                        }
                        

                    })


                }
                $('.common_selector').click(function(){
                    filter_data();
                });
                $('#sortBy').change(function(){
                    $.ajax({
                        url:'Catagory/search',
                        method:'POST',
                        data:{sorter:this.value,action:'search'},
                        success:function(data){
                            
                            $('.category-list .row').html(data);
                            
                        },
                        error:function(error){
                            console.log(error);
                        }
                    })
                  
                });
                $('#show').change(function(){
                    $.ajax({
                        url:'Catagory/search',
                        method:'POST',
                        data:{show:this.value,action:'search'},
                        success:function(data){
                            
                            $('.category-list .row').html(data);
                            
                        },
                        error:function(error){
                            console.log(error);
                        }
                    })
                  
                });
                
                $('#s').on('keyup', function (e){
                    // alert($('#s').val());
                    e.preventDefault();
                    $.ajax({
                        url:'Catagory/serachByProduct',
                        method:'GET',
                        data:{s:$('#s').val()},
                        success:function(data){
                            
                            $('.category-list .row').html(data);
                            
                            
                        },
                        error:function(error){
                            console.log(error);
                        }
                    })
                  
                });











                // abstreact function 

                    function get_filter(class_name)
                    {
                        var filter = [];
                        $('.'+class_name+':checked').each(function(){
                            filter.push($(this).val());
                        });
                        return filter;
                    }
                    

                   


                   
});

