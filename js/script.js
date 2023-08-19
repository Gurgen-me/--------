let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

const likeBtn = document.querySelector('.user-likes')
likeBtn.addEventListener('click', countLikes)
function countLikes() {
    let count = 0
    const likeToRed = document.querySelector('.vector')
    const countPlace = document.getElementById('likesCounter')
    if (likeToRed.classList.contains('_active') == true) {
        likeToRed.classList.remove('_active');
        count - 1;
        countPlace.innerText = count
    }
    else {
        count += 1;
        likeToRed.classList.add('_active');
        countPlace.innerText = count
    }
}   

