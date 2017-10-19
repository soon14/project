jQuery(document).ready(function($){
	//open popup
	$('.cd-popup-trigger').on('click', function(event){
        var tel = $('#tel').val();

      if (tel.match(/^1[3|5|8|7][0-9]{9}$/))
       {
           //生成订单
           var voucherId = $('input:radio:checked').val();
           var activity_id = $('#activity_id').val();
           var no_id = $('#no_id').val();
           $.get('/index.php?m=weixin&c=Apply&a=addApply',{'tel':tel,'voucherId':voucherId,'activity_id':activity_id,'no_id':no_id},function(data){
                data = data.toString();
               var arr = data.split('+');
               if (arr[0]==1)
                {
                    window.location.href = '/index.php?m=weixin&c=Apply&a=noPayOrder&id='+arr[1];
                }else{
                    alert(arr[0]);
                }
          })
            //window.setTimeout("window.location.href = '/index.php?m=weixin&c=Apply&a=addApply'",1000);
       }
        else {
           event.preventDefault();
           $('.cd-popup').addClass('is-visible');
       }
	});
	
	//close popup
	$('.cd-popup').on('click', function(event){
		if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-popup').removeClass('is-visible');
	    }
    });
});