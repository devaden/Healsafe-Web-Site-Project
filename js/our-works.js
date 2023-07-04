const sliderItems = document.querySelector(".slider-items")
const sliderPages = document.querySelectorAll(".slider-item")
const sliderButtons = document.querySelector(".pagenation-buttons")

let scale = 10;
let currentIndex;
let currentElement;
let selectedElementId = document.querySelector(".slider-item.active").id;




const onActive = (id)=>{
    const index = id -1
    console.log(index)
    document.querySelector(`.slider-pagenation-index.active`).classList.remove("active")
    selectedElementId = id
    for(item of sliderPages) {
        item.style.transform = `translateY(-${index * 100}%)`;
    }
    sliderButtons.innerHTML = "";

    buttonsLoader()
}

const buttonsLoader = ()=>{    
    for(item of sliderItems.children){  
        const buttonTag = `
        <span id="${item.id}" style="width:${scale}px; height:${scale}px;" class="slider-pagenation-index"></span>
        `  
        const activeButtonTag = `
        <span id="${item.id}" class="slider-pagenation-index active"></span>
        `

        if(item.id === selectedElementId){
            sliderButtons.innerHTML += activeButtonTag
            currentElement = item
            scale-=1
            continue;
        }
        sliderButtons.innerHTML += buttonTag
        
        if(!currentElement){
            scale += 1 
        }else{
            scale -= 1 
            console.log(scale)
        }    

        if(scale<10){
            scale = 10
        }
        
    }
    for(button of sliderButtons.children){
        
        button.addEventListener("click",(e)=>{        
            onActive(e.target.id)
            e.target.classList.add("active")
        })
    }
}

buttonsLoader()



