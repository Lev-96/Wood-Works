let id = location.hash.slice(1)

let main = document.querySelector('#num')


fetch('../post.json')
.then(data => data.json())
.then(data => {
    data.map(post => {
        if(post.id == id){
            main.innerHTML += `<img src="${post.image}">`
        }
    })
})