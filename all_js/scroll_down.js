function scrollTo(element) {
    window.scroll({
        left: 0,
        top: element.offsetTop,
        behavior: 'smooth' 
    })
}

var button = document.querySelector('.button');
var news = document.querySelector('.News_Tittle')

button.addEventListener('click', () => {
    scrollTo(news);
})