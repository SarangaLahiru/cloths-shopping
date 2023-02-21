var slides=document.querySelectorAll('.slide')
var radbtn=document.querySelectorAll('.rad-btn')
var left1=document.querySelector('.left1')
var right1=document.querySelector('.right1')
var slideInt;
var intTime=5000;
right1.addEventListener('click',function(e){
    e.preventDefault();
    nextSlide();
    clrInterval();
})
left1.addEventListener('click',function(e){
    e.preventDefault();
    preSlide();
    clrInterval();
})


function nextSlide(){
    var curr=document.querySelector('.curr')
    var active=document.querySelector('.active')
    curr.classList.remove('curr')
    active.classList.remove('active')
    if(curr.nextElementSibling){
        curr.nextElementSibling.classList.add('curr')
        active.nextElementSibling.classList.add('active')
    }
    else{
        slides[0].classList.add('curr')
        radbtn[0].classList.add('active')
    }
}
function preSlide(){
    var curr=document.querySelector('.curr')
    var active=document.querySelector('.active')
    curr.classList.remove('curr')
    active.classList.remove('active')
    if(curr.previousElementSibling){
        curr.previousElementSibling.classList.add('curr')
        active.previousElementSibling.classList.add('active')
    }
    else{
        slides[slides.length-1].classList.add('curr')
        radbtn[radbtn.length-1].classList.add('active')
    }
}
slideInt=setInterval(nextSlide,intTime);
function clrInterval(){
    clearInterval(slideInt);
    slideInt=setInterval(nextSlide,intTime);

}
var catogery=document.querySelectorAll('.cats')
var left2=document.querySelectorAll('.left2')
var right2=document.querySelectorAll('.right2')
catogery.forEach((item,i)=>{
    var prewid=item.getBoundingClientRect();
    var wid=prewid.width;
    left2[i].addEventListener('click',(e)=>{
        e.preventDefault();
        item.scrollLeft-=350
        clrInterval2();
    })
    right2[i].addEventListener('click',(e)=>{
        e.preventDefault();
        item.scrollLeft+=350
        clrInterval2();
    })
})
function auto1(){
    catogery.forEach((item,i)=>{
        var prewid=item.getBoundingClientRect();
        var wid=prewid.width;
        
       
            item.scrollLeft+=350
            console.log(item.scrollLeft)
            
            if(item.scrollLeft==2101){
                item.scrollLeft=0;

            }
           

    })
    
}
var intTime2=2000;
var slideInt2;
slideInt2=setInterval(auto1,intTime2);
function clrInterval2(){
    clearInterval(slideInt2)
    slideInt2=setInterval(auto1,intTime2);
    
}

var tname=document.querySelectorAll('.tname')
var items=document.querySelectorAll('.items')

console.log(items)



    tname[0].addEventListener('click',function(e){
        e.preventDefault();
        tname[0].classList.add('curr1');
         tname[1].classList.remove('curr1');
         tname[2].classList.remove('curr1');
         tname[3].classList.remove('curr1');
        
         items[0].classList.add('curr2')
         items[1].classList.remove('curr2')
         items[2].classList.remove('curr2')
         items[3].classList.remove('curr2')

        
    })
    tname[1].addEventListener('click',function(e){
        e.preventDefault();
        tname[0].classList.remove('curr1');
         tname[1].classList.add('curr1');
         tname[2].classList.remove('curr1');
         tname[3].classList.remove('curr1');
         items[0].classList.remove('curr2')
         items[1].classList.add('curr2')
         items[2].classList.remove('curr2')
         items[3].classList.remove('curr2')
        
    })
    tname[2].addEventListener('click',function(e){
        e.preventDefault();
        tname[0].classList.remove('curr1');
         tname[1].classList.remove('curr1');
         tname[2].classList.add('curr1');
         tname[3].classList.remove('curr1');
         items[0].classList.remove('curr2')
         items[1].classList.remove('curr2')
         items[2].classList.add('curr2')
         items[3].classList.remove('curr2')
        
    })
    tname[3].addEventListener('click',function(e){
        e.preventDefault();
        tname[0].classList.remove('curr1');
         tname[1].classList.remove('curr1');
         tname[2].classList.remove('curr1');
         tname[3].classList.add('curr1');
         items[0].classList.remove('curr2')
         items[1].classList.remove('curr2')
         items[2].classList.remove('curr2')
         items[3].classList.add('curr2')
        
    })

    var search=document.getElementById('search1')
    search.addEventListener('keyup',function(){
        window.location='rest2.search.php';
    })
    
    
   



