function openNav() {
    document.getElementById("navbar").style.width = "250px";
    document.getElementById("page").style.marginLeft = "250px";
    document.getElementById("navbar_open").style.display = "none";
}

function closeNav() {
    document.getElementById("navbar").style.width = "0";
    document.getElementById("page").style.marginLeft= "0";
}

function delayNav(){
    closeNav();
    setTimeout(function(){
         document.getElementById("navbar_open").style.display = "block";    
    },700);
    
}