<script>
    let shareModal = document.getElementById('shareNewsModal');
    let showBtn = document.getElementById('news-collapse');

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
                <img src="{{asset('img/news')}}/${this.img}" alt="" class="news-card-img">
                <div class="card-body">
                    <p class="news-card-title">${this.title}</p>
                    <p class="news-card-date">${this.date}</p>
                    <div class="row justify-content-between align-items-center">
                        <a href="{{ env('APP_URL') }}{{app()->getLocale()}}/news?id=${this.id}" class="news-link">
                            Читати більше
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1L17 8L10 15M1 8H17H1Z" stroke="#3498DB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>

                    </div>
                </div>
        `
        }

        createCardContent(){
            this.cardBox.innerHTML = this.newsContent()
        }
    }


    const REQUEST = '{{ env('APP_URL') }}{{app()->getLocale()}}/news/get'

    fetch(REQUEST)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            data.forEach((obj,index) => {
                console.log(obj)
                let card = new News(obj)
                card.createCardContent()

                let newsCard = document.querySelectorAll('.news-card')
                console.log(data.length)
                if(data.length<2)showBtn.classList.add('d-none')
                if(index>2){
                    newsCard[index].classList.add('hide')
                    showHidden(newsCard[index],showBtn)
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

    // let shareBtn = document.querySelectorAll('.news-share');
    // let socialBtns = document.getElementById('socialBox')
    //
    //
    // shareBtn.forEach(item =>{
    //     item.addEventListener('click',()=>{
    //         let link = item.getAttribute('data-link')
    //         socialBtns.setAttribute('data-a2a-url', link)
    //         socialBtns.setAttribute('data-a2a-title', link)
    //         shareModal.classList.remove('d-none')
    //         shareModal.style.opacity = '1';
    //         console.log(socialBtns)
    //     })
    // })





    function showHidden(elem,btn){
        btn.addEventListener('click',()=>{
            elem.classList.toggle('hide')
        })
    }




</script>



