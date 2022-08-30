let form           = document.getElementById('donate-form'),
    formAction     = form.getAttribute('action')
    inputSum       = document.getElementById('sum'),
    radioDonate    = document.querySelectorAll('[name="rad"]'),
    modal          = document.getElementById('shareNewsModal'),
    exampleEl      = document.getElementById('example'),
    exampleEl      = document.getElementById('example'),
    closeBtn       = document.getElementById('close_modal'),
    collapse       = document.getElementById('collapse-btn'),
    openForm       = document.getElementById('openFormModal'),
    headerOpenForm = document.querySelectorAll('.headerOpenForm'),
    modalForm      = document.getElementById('questionnaire'),
    closeForm      = document.getElementById('close-form'),
    closeForm2     = document.getElementById('back'),
    headerToggle   = document.querySelector('.navbar-toggler'),
    navbar         = document.querySelector('.navbar'),
    tooltipTitle   = 'З початку реалізації проекту у 2017 р., було створено кол-центр ГО «Ерлайт», функціонування якого були задіяні всі співробітники проекту, з урахуванням специфіки завдань з правового консультування, організаційне супроводу поранених при оформлення спеціального статусу осіб з інвалідністю внаслідок війни, реабілітаційних заходів, надання сертифікатів продовольчої та гігієнічної підтримки, а також іншим формам гуманітарної підтримки – загалом більш ніж 200 постраждалим громадянам прийнято понад 4000 дзвінків. У ході діяльності кол-центру та проведення планових опитувань постраждалих у зоні конфлікту, було виявлено близько 3,5 тис. осіб, гостро потребують гуманітарної допомоги, про це було повідомлено гуманітарним кластерам ООН.'



for (let i=0; i < radioDonate.length; i++){
    radioDonate[i].addEventListener('click', () =>{
        inputSum.value =  radioDonate[i].value
        formAction = getAction(radioDonate[i].value);
        getAction(radioDonate[i].value)
    })
}


function getAction(value){
  return `https://easypay.ua/ua/partners/hromadska-orhanizatsiya-erlayt?amount=${value}`
}
function closeFormFunk(btn,form){
    btn.addEventListener('click', ()=>{
        form.style.opacity='0'
        form.classList.add('d-none')
    })
}



closeBtn.addEventListener('click', function (){
    modal.style.opacity = '0';
    modal.classList.add('d-none');

})


let tooltip = new bootstrap.Tooltip(exampleEl, {
    title:tooltipTitle,
    trigger:'hover'
})
closeFormFunk(closeForm,modalForm)
closeFormFunk(closeForm2,modalForm)

openForm.addEventListener('click', ()=>{
    modalForm.classList.remove('d-none')
    modalForm.style.opacity='1'
})
headerOpenForm.forEach(link=>{
    link.addEventListener('click', ()=>{
        modalForm.classList.remove('d-none')
        modalForm.style.opacity='1'
    })
})

// collapse.addEventListener('click', function (){
//     let attr = this.getAttribute('aria-controls')
//     let row = document.getElementById(attr)
//     row.classList.remove('d-none')
// } )

headerToggle.addEventListener('click',()=>{
    let attr = headerToggle.getAttribute('aria-expanded')
    attr === 'true' ? navbar.style.background='#3498DB' : navbar.style.background='transparent'
})

if(document.documentElement.clientWidth <=600){
    let flipcard = document.querySelectorAll('.flipcard')
    flipcard[0].classList.add('active')

    flipcard.forEach(item =>{
        item.classList.add('carousel-item')
    })

    var myCarousel = document.querySelector('#carouselExampleControls')
    var carousel = new bootstrap.Carousel(myCarousel,{
        wrap:true,
        touch:true
    })

}


