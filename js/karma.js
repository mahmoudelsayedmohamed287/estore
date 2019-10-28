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
//             console.log(data);
            
//            },
//            error:function(){
//                console.log('error')
//            }

//          });
         

    
//   }
$(document).ready(function(){

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
                         console.log(data)
                         $('.category-list').html(data);
                        },
                        error:function(error){
                            console.log(error);
                        }
                        

                    })


                }
                $('.common_selector').click(function(){
                    filter_data();
                });

                    function get_filter(class_name)
                    {
                        var filter = [];
                        $('.'+class_name+':checked').each(function(){
                            filter.push($(this).val());
                        });
                        return filter;
                    }
                    


                   
});

