const screen_size = window.matchMedia( "(max-width: 1200px)" );

function openNav() {
    if(screen_size.matches)
    {
        document.getElementById("navbar").style.width = "300px";
        document.getElementById("page").style.marginLeft = "300px";
        document.getElementById("navbar_open").style.display = "none";
        document.getElementById("start").style.left = "35px";    
        document.getElementById("end").style.left = "35px";    
    }
    else 
    {
        document.getElementById("navbar").style.width = "250px";
        document.getElementById("page").style.marginLeft = "250px";
        document.getElementById("navbar_open").style.display = "none";
    }
}

function closeNav() 
{
    if(screen_size.matches)
    {
        document.getElementById("navbar").style.width = "0";
        document.getElementById("page").style.marginLeft= "0";
        document.getElementById("start").style.left = "50px";    
        document.getElementById("end").style.left = "50px"; 
    }
    
    else
    {
        document.getElementById("navbar").style.width = "0";
        document.getElementById("page").style.marginLeft= "0";
        document.getElementById("start").style.left = "50px";    
        document.getElementById("end").style.left = "100px";
    }
}

function delayNav(){
    closeNav();
    setTimeout(function(){
         document.getElementById("navbar_open").style.display = "block";    
    },500);
    
}

