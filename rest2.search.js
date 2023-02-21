var items=document.querySelectorAll('.item')
var search=document.getElementById('search')
var search1=document.getElementById('searchicon')

search1.addEventListener('click',function(e){
   
    e.preventDefault();
    for(var a=0; a<items.length; a++){
        
        var productname=items[a].getElementsByTagName('h4')[0];
        var match=productname.textContent.toLowerCase()||productname.innerHTML;
        var searchthing=search.value.toLowerCase();
        console.log(match.indexOf(searchthing))
        if(match.indexOf(searchthing)>-1){
            items[a].style.display='';
        }
        else{
            items[a].style.display='none';
        }
    }
    
})

