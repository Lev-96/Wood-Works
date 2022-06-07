let itemsSection = document.querySelector('.items')
let PostsSection = document.querySelector('.imgse')
let totalBox = document.querySelector('#cartBoxTotal')
let totalBox1 = document.querySelector('.cartTotal')
let itemsCount = document.querySelector('#cartBoxCount')
let counts = document.querySelector('#counts')

async function getAll(){

    let data = await fetch('data.json')
    return data.json()

}

async function getData(cat, link) {
    let links = document.querySelectorAll('.links a')

    for(let item of links){
        item.classList.remove('active')
    }

    link.classList.add('active')
    
    itemsSection.innerHTML = ''

    let data = await getAll()

    data.map(item => {
        if (item.category == cat || cat == "All"){
            let title = item.name.substring(0, 20)
            itemsSection.innerHTML += `
                <div class="itemse">
                    <div class="hidden">
                        <img src="${item.image}">
                        <div class="item-icons">
                            <p class="disc">${item.disc}</p>
                            <p class="stock">${item.stock}</p>
                        </div>
                        <div class="hover-icons">
                            <a href="#"><i class="ri-fullscreen-line"></i></a>
                            <a href="#"><i class="ri-refresh-line"></i></a>
                        </div>
                        <a href="javascript:void(0)" id="addtocart" onclick="add(${item.id})"><i class="ri-shopping-cart-2-fill"></i> ${item.action}</a>
                        <a href="#" class="favoriteIcon"><i class="ri-heart-line"></i></a>
                    </div>
                    <div class="img-text">
                        <p>${title}...</p>
                        <div id="price">
                        <span class = "discount">${item.price}$</span>
                        <span>${item.discount}$</span>
                        </div>
                    </div>  
                </div>  
            `
        }
    })

    
    let icons = document.querySelectorAll('.item-icons .disc')
    let stocks = document.querySelectorAll('.item-icons .stock')
    
    for(let i = 0; i < icons.length; i++){
        if(icons[i].innerText.length == 0) icons[i].remove()
        if(stocks[i].innerText.length == 0) stocks[i].remove()
    }
    
}


async function getAllPosts() {

    let data = await fetch('post.json')
    return data.json()

}

async function getDataPosts() {

    PostsSection.innerHTML = ''

    let data = await getAllPosts()

    data.map(item => {

        PostsSection.innerHTML += `
            <div class="imgs">
                <div class="imag">
                    <img src="${item.image}">
                </div>
                <div class="item">
                    <h3>${item.title}</h3>
                    <a href="#">By ${item.author},</a>
                    <a href="#">${item.date}</a>
                    <p>${item.descr}</p>
                    <a href="./post/post.html#${item.id}" id="btn">Read More</a>
                </div>
            </div>  
        `
    })
}

getData("All", document.querySelector('.active'))
getDataPosts()

/************************** SLIDER START ********************************/

let slide = document.querySelector('.slide')

let slideInfo = [{
        title: "Flexible Chair",
        descr: "Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore et dolore magna",
        category: "New Products"
    },
    {
        title: "Creative Sofa",
        descr: "Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore et dolore magna",
        category: "Best Seller"
    }
]

let slides = ['./image/Slider/slider-1.png', './image/Slider/slider-2.png']
let main = document.querySelector('.img')
let i = 0
slide.style.backgroundImage = `url(${slides[i]})`

function changeSlide() {

    i++
    if (i == slides.length) i = 0

    slide.style.backgroundImage = `url(${slides[i]})`
    
    document.querySelector('.animate h4').innerHTML = slideInfo[i].category
    document.querySelector('.animate p').innerHTML = slideInfo[i].descr
    document.querySelector('.animate h2').innerHTML = slideInfo[i].title
}


setInterval(changeSlide, 3000)

/************************** /SLIDER END ********************************/

/**Cart show */

function showCart(){
    document.querySelector('#cart').classList.add('cartShow')
    document.querySelector('.darkBg').classList.add('darkBgShow')
    document.body.style.overflow = 'hidden'
}

function hideCart(){
    document.querySelector('#cart').classList.remove('cartShow')
    document.querySelector('.darkBg').classList.remove('darkBgShow')
    document.body.style.overflowY = 'auto'
}

/*****openSearch********/ 

function showSearch(){
    document.querySelector('.openSearch').classList.add('searchShow')
    document.querySelector('.hidenSearchs').classList.add('darkShowSearch')
    document.body.style.overflow = 'hidden'
}
function hidenSearch(){
    document.querySelector('.openSearch').classList.remove('searchShow')
    document.querySelector('.hidenSearchs').classList.remove('darkShowSearch')
    document.body.style.overflowY = 'auto'
}

/*Cart script */

function add(id){
    let cartBox = document.querySelector('#cartBox')
    fetch('data.json')
    .then(data => data.json())
    .then(data => {
        data.map(item => {
            if(item.id == id){
                let product = {}

                if(localStorage.getItem(`product_${id}`) != null){
                    product = JSON.parse(localStorage.getItem(`product_${id}`))
                    product.count++
                    product.discount = +item.discount * product.count
                    cartBox.setAttribute("class", 'animate__animated animate__bounce slide')
                    
                }else{
                    product = {
                        id: item.id,
                        name: item.name,
                        category: item.category,
                        discount: item.discount,
                        image: item.image,
                        count: 1
                    }
                }
                localStorage.setItem(`product_${id}`, JSON.stringify(product))
                
            }
            
        })
        showCartProducts()
        cartBox.setAttribute("class", "slide")
        
    })
}

function showCartProducts(){
    let total = 0
    totalBox.innerHTML = '$0'
    totalBox1.innerHTML = '$0'
    let cartItems = document.querySelector('.cartSectionIcon')

    cartItems.innerHTML = `
        <i id="cartIcon" class="fa-solid fa-money-check-dollar"></i>
        <h4>Pay by card !</h4>
    `

    for(let i = 1; i <= 8; i++){
        let cartProduct = JSON.parse(localStorage.getItem(`product_${i}`))

        if(cartProduct != null){

            total += +cartProduct.discount
            totalBox.innerHTML = `$${total}`
            totalBox1.innerHTML= `$${total}`

            document.querySelector('#cartIcon').style.display = 'none'
            document.querySelector('#cart h4').style.display = 'none'
            cartItems.innerHTML += `
                <div class="cartItem">
                    <img src="${cartProduct.image}">
                    <div class="cartInfo">
                        <i id="trash" title="Remuve" onclick="remove(${cartProduct.id})" class="fa-solid fa-xmark"></i>
                        <p>Product Name: ${cartProduct.name}</p>
                        <p>Product Category: ${cartProduct.category}</p>
                        <p>Product Price: ${cartProduct.discount}$</p>
                        <div class="countBox">
                            <i onclick="changeCount(${cartProduct.id}, 'minus')" class="fa fa-minus"></i>
                            <span>${cartProduct.count}</span>
                            <i onclick="changeCount(${cartProduct.id}, 'plus')" class="fa fa-plus"></i>
                        </div>
                    </div>
                </div>
            `
        }

        let itemsCountNumber = document.getElementsByClassName('cartItem').length
        itemsCount.innerHTML = `${itemsCountNumber} items`
        counts.innerHTML =`${itemsCountNumber}`
    }
    
}

function changeCount(id, value){

    let product = JSON.parse(localStorage.getItem(`product_${id}`))
    let oldPrice = 0

    if(value == 'plus'){
        product.count++
    }else{
        product.count--

        if(product.count == 0){
            product.count = 1
        }
    }

    fetch('data.json')
    .then(data => data.json())
    .then(data => {
        oldPrice = data[id-1].discount
        product.discount = +oldPrice * product.count

        localStorage.setItem(`product_${id}`, JSON.stringify(product))
    showCartProducts()
    })

}

showCartProducts()


function remove(id){
    localStorage.removeItem(`product_${id}`)
    showCartProducts()
}


