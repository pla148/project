const listImg = document.querySelectorAll('.banner_list img');
const imgF = document.querySelector('.imgTCban');
const imgS = document.querySelectorAll('.banner_list img');
let index = 0;
const btnLeft = document.querySelector('.btnLeft')
const btnRight = document.querySelector('.btnRight')
const loadright = () =>{
    let width = imgS[0].offsetWidth;
    index = (index + 1) % imgS.length;
    imgF.src = listImg[index].getAttribute('src')
}
let load = setInterval(loadright, 3000)
btnRight.addEventListener('click',()=>{
    clearInterval(load)
    loadright()
    load = setInterval(loadright, 3000)
})
btnLeft.addEventListener('click',()=>{
    clearInterval(load)
    let width = imgS[0].offsetWidth;
    
    if(index==0){
        index = imgS.length-1
    }else{
        index = (index - 1) % imgS.length
    }
    listImg.style.transform = `translateX(${-width * index}px)`
    load = setInterval(loadright, 3000)
})