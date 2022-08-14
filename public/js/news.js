let shareModal = document.getElementById('shareNewsModal');

class NewsCards {

    constructor() {
        this.$el = document.querySelector('[data-type="news-box"]')
    }

    createCardBox(){
        let div = document.createElement('div')
        div.classList = 'news-card'

        this.$el.appendChild(div)

        return div
    }
}

class News extends NewsCards{

    constructor(options) {
        super(options)
        this.cardBox =this.createCardBox()
        this.title = options.title,
        this.img = options.img,
        this.date = options.date,
        this.link = options.link,
        this.id = options.id
    }


    newsContent(){
        return `
                <img src="${this.img}" alt="" class="news-card-img">
                <div class="card-body">
                    <p class="news-card-title">${this.title}</p>
                    <p class="news-card-date">${this.date}</p>
                    <div class="row justify-content-between align-items-center">
                        <a href="/index.php?page=news&id=${this.id}" class="news-link">
                            Читати більше
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1L17 8L10 15M1 8H17H1Z" stroke="#3498DB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <button  class="news-share" data-link="${this.link}">
                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 9C0 10.654 1.346 12 3 12C3.794 12 4.512 11.685 5.049 11.18L11.04 14.604C11.022 14.734 11 14.864 11 15C11 16.654 12.346 18 14 18C15.654 18 17 16.654 17 15C17 13.346 15.654 12 14 12C13.206 12 12.488 12.315 11.951 12.82L5.96 9.397C5.978 9.266 6 9.136 6 9C6 8.864 5.978 8.734 5.96 8.603L11.951 5.18C12.488 5.685 13.206 6 14 6C15.654 6 17 4.654 17 3C17 1.346 15.654 0 14 0C12.346 0 11 1.346 11 3C11 3.136 11.022 3.266 11.04 3.397L5.049 6.82C4.496 6.29468 3.76273 6.00123 3 6C1.346 6 0 7.346 0 9Z" fill="#3498DB"/>
                            </svg>
                        </button>
                    </div>
                </div>
        `
    }

    createCardContent(){
        this.cardBox.innerHTML = this.newsContent()
    }
}


const REQUEST = 'https://ngo.air-light.com.ua/news/get'

fetch(REQUEST)
     .then((response) => {
         return response.json();
     })
     .then((data) => {
         data.forEach((obj,index) => {
             let card = new News(obj)
             card.createCardContent()

             let newsCard = document.querySelectorAll('.news-card')
             if(index>2){
                 newsCard[index].classList.add('hide')
                 showHidden(newsCard[index],document.getElementById('news-collapse'))
             }

             if(document.documentElement.clientWidth <=600){
                 let news = document.querySelectorAll('.news-card')
                 newsCard[0].classList.add('active')

                 newsCard.forEach(item =>{
                     item.classList.add('carousel-item')
                 })

                 var newsCarousel = document.querySelector('#carouselNews')
                 var carousel = new bootstrap.Carousel(newsCarousel,{
                     wrap:true,
                     touch:true
                 })
             }

         })


     });

let shareBtn = document.querySelectorAll('.news-share');
let socialBtns = document.getElementById('socialBox')


shareBtn.forEach(item =>{
    item.addEventListener('click',()=>{
        let link = item.getAttribute('data-link')
        socialBtns.setAttribute('data-a2a-url', link)
        socialBtns.setAttribute('data-a2a-title', link)
        shareModal.classList.remove('d-none')
        shareModal.style.opacity = '1';
        console.log(socialBtns)
    })
})





function showHidden(elem,btn){
    btn.addEventListener('click',()=>{
        elem.classList.toggle('hide')
    })
}



