// бургер меню
let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}


// Лайки
const likeBtn = document.querySelectorAll('.user-likes')

for(let i = 0 ; i <likeBtn.length; i++){
    likeBtn[i].addEventListener('click', countLikes)
    function countLikes() {
        let count = 0
        const likeToRed = document.querySelectorAll('.vector')
        const countPlace = document.getElementsByClassName('likesCounter')
        if (likeToRed[i].classList.contains('_active') == true) {
            likeToRed[i].classList.remove('_active');
            count - 1;
            countPlace[i].innerText = count
        }
        else {
            count += 1;
            likeToRed[i].classList.add('_active');
            countPlace[i].innerText = count
        }
    }  
}

// Сортировка

const container =
document.querySelector('.news-count');
const sort = document.getElementById('sort');

sort.addEventListener("click",()=>{
    container.classList.toggle("news-count-r")
    container.classList.toggle("news-count")
});


