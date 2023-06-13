openmenu.addEventListener('click', () =>{
    menu.style.display = 'flex'

    menu.style.right = (menu.offsetWidth * -1) + 'px' 

    openmenu.style.display = 'none'

    setTimeout(() => {
        menu.style.opacity = '1'
        menu.style.right = '0'
    }, 10)
    
})
closemenu.addEventListener('click', () =>{
    menu.style.opacity = '0'

    menu.style.right = (menu.offsetWidth *- 1) + 'px' 

    setTimeout(() =>{
        menu.removeAttribute('style')
        openmenu.removeAttribute('style')
    }, 200)
    
    
})