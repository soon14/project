// JavaScript Document
$(document).ready(function() {

    $.ajax(
		    {
			  type: "post",
			  data:'',
			  dataType:'html', 
			  url: "http://" + window.location.host +"/plugins/qq_kefu/",
			  success: function(data)
			     {
					if(data!=''){
                        $('body').append(data);
                    }
			     },
			 error: function(a,b,c)
			  {	  

			  }  
		    }
		);	
	
	
	
});