$.ajax({  
    url:"save/all_bus_stop.php",  
    method:"POST",  
    success:function(data)  
    {  
        $('#end').html(data); 
    }  
});