<footer>
    <div class="container">
        <div class="row footer-desc mb-5 justify-content-between">
            <div class="col-6 col-md-3 d-flex flex-column justify-content-between">
                <img class="footer-img" src="{{asset('img/AIRLIGHT.png')}}"  alt="">
                <p class="footer-text mt-4 mb-4">Захист прав і свобод громадян України,
                    постраждалих в результаті воєнних дій
                    на території України.</p>
                <div class="social-network">
                    <a href="https://www.facebook.com/ngo.airlight/" class="social facebook"></a>
                    <a href="https://www.linkedin.com/company/ngo-air-light/" class="social linkedin"></a>
                    <a href="https://youtube.com/playlist?list=PL5SelpMCSWyzufPZVsJcnF4LjJAmWq1A7" class="social youtube"></a>
                    <a href="https://www.instagram.com/ngo.airlight/" class="social instagram"></a>
                    <a href="https://t.me/+1ugIXWEagGhiOWVi" class="social telegram"></a>
                </div>

            </div>
            <div class="col-6 col-md-3  d-flex flex-column justify-content-between">
                <a href="#about-us" class="nav-link">Про нас</a>
                <a href="#what-we-do" class="nav-link">Що ми робимо</a>
{{--                <a href="#" class="nav-link">Взяти участь</a>--}}
                <a href="#news" class="nav-link">Новини</a>
                <a href="javascript:void(0)" class="nav-link headerOpenForm" >Стати волонтером </a>
                <a href="{{ env('APP_URL') }}{{app()->getLocale()}}/projects" class="nav-link">Проекти Ерлайт</a>
            </div>
            <div class="col-12 col-md-3  d-flex flex-column justify-content-between">
                <div class="contact-box">
                    <p class="contact-title">
                        Телефон довіри
                        <button type="button" class="btn btn-secondary" id="example" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 18C11.3869 18 13.6761 17.0518 15.364 15.364C17.0518 13.6761 18 11.3869 18 9C18 6.61305 17.0518 4.32387 15.364 2.63604C13.6761 0.948212 11.3869 0 9 0C6.61305 0 4.32387 0.948212 2.63604 2.63604C0.948212 4.32387 0 6.61305 0 9C0 11.3869 0.948212 13.6761 2.63604 15.364C4.32387 17.0518 6.61305 18 9 18ZM10.0463 7.4115L8.92125 12.7046C8.8425 13.0871 8.95388 13.3043 9.26325 13.3043C9.4815 13.3043 9.81112 13.2255 10.035 13.0275L9.936 13.4955C9.61312 13.8848 8.901 14.1683 8.28788 14.1683C7.497 14.1683 7.16062 13.6935 7.37887 12.6844L8.20912 8.78288C8.28113 8.45325 8.21588 8.334 7.88625 8.25412L7.37887 8.163L7.47112 7.73438L10.0474 7.4115H10.0463ZM9 6.1875C8.70163 6.1875 8.41548 6.06897 8.2045 5.858C7.99353 5.64702 7.875 5.36087 7.875 5.0625C7.875 4.76413 7.99353 4.47798 8.2045 4.267C8.41548 4.05603 8.70163 3.9375 9 3.9375C9.29837 3.9375 9.58452 4.05603 9.7955 4.267C10.0065 4.47798 10.125 4.76413 10.125 5.0625C10.125 5.36087 10.0065 5.64702 9.7955 5.858C9.58452 6.06897 9.29837 6.1875 9 6.1875Z" fill="white" fill-opacity="0.5"/>
                            </svg>
                        </button>
                    </p>
                    <a href="tel:+380990303064" class="contact">+380990303064</a>
                </div>
                <div class="contact-box">
                    <p class="contact-title">
                        Гаряча лінія:
                    </p>
                    <a href="tel:+380502845008" class="contact">+380502845008</a>
                </div>
                <div class="contact-box">
                    <p class="contact-title">Email</p>
                    <a href="mailto:info@air-light.com.ua" class="contact">info@air-light.com.ua</a>
                </div>
                <div class="contact-box">
                    <p class="contact-title">
                        Адреса
                    </p>
                    <p class="contact">м.Киев, вул.Антоновича 72</p>
                </div>
            </div>
        </div>
        <div class="footer-mob">
            <div class="row">
                <div class="col-6 col-md-3 d-flex flex-column justify-content-between">
                    <img class="footer-img" src="{{asset('img/AIRLIGHT.png')}}"  alt="">
                    <p class="footer-text mt-4 mb-4">Захист прав і свобод громадян України,
                        постраждалих в результаті воєнних дій
                        на території України.</p>
                    <div class="social-network">
                        <a href="https://www.facebook.com/ngo.airlight/" class="social facebook"></a>
                        <a href="https://www.linkedin.com/company/ngo-air-light/" class="social linkedin"></a>
                        <a href="https://youtube.com/playlist?list=PL5SelpMCSWyzufPZVsJcnF4LjJAmWq1A7" class="social youtube"></a>
                        <a href="https://www.instagram.com/ngo.airlight/" class="social instagram"></a>
                        <a href="https://t.me/+1ugIXWEagGhiOWVi" class="social telegram"></a>
                    </div>

                </div>
                <div class="col-6 col-md-3  d-flex flex-column justify-content-between">
                    <div class="contact-box">
                        <p class="contact-title">
                            Телефон довіри
                            <button type="button" class="btn btn-secondary" id="example" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18C11.3869 18 13.6761 17.0518 15.364 15.364C17.0518 13.6761 18 11.3869 18 9C18 6.61305 17.0518 4.32387 15.364 2.63604C13.6761 0.948212 11.3869 0 9 0C6.61305 0 4.32387 0.948212 2.63604 2.63604C0.948212 4.32387 0 6.61305 0 9C0 11.3869 0.948212 13.6761 2.63604 15.364C4.32387 17.0518 6.61305 18 9 18ZM10.0463 7.4115L8.92125 12.7046C8.8425 13.0871 8.95388 13.3043 9.26325 13.3043C9.4815 13.3043 9.81112 13.2255 10.035 13.0275L9.936 13.4955C9.61312 13.8848 8.901 14.1683 8.28788 14.1683C7.497 14.1683 7.16062 13.6935 7.37887 12.6844L8.20912 8.78288C8.28113 8.45325 8.21588 8.334 7.88625 8.25412L7.37887 8.163L7.47112 7.73438L10.0474 7.4115H10.0463ZM9 6.1875C8.70163 6.1875 8.41548 6.06897 8.2045 5.858C7.99353 5.64702 7.875 5.36087 7.875 5.0625C7.875 4.76413 7.99353 4.47798 8.2045 4.267C8.41548 4.05603 8.70163 3.9375 9 3.9375C9.29837 3.9375 9.58452 4.05603 9.7955 4.267C10.0065 4.47798 10.125 4.76413 10.125 5.0625C10.125 5.36087 10.0065 5.64702 9.7955 5.858C9.58452 6.06897 9.29837 6.1875 9 6.1875Z" fill="white" fill-opacity="0.5"/>
                                </svg>
                            </button>
                        </p>
                        <a href="tel:+380990303064" class="contact">+380990303064</a>
                    </div>
                    <div class="contact-box">
                        <p class="contact-title">
                            Гаряча лінія:
                        </p>
                        <a href="tel:+380502845008" class="contact">+380502845008</a>
                    </div>
                    <div class="contact-box">
                        <p class="contact-title">Email</p>
                        <a href="mailto:info@air-light.com.ua" class="contact">info@air-light.com.ua</a>
                    </div>
                    <div class="contact-box">
                        <p class="contact-title">
                            Адреса
                        </p>
                        <p class="contact">м.Киев, вул.Антоновича 72</p>
                    </div>
                </div>
            </div>
            <div class="menu-line"></div>
            <div class="footer-links d-flex flex-wrap">
                <a href="#about-us" class="nav-link scroll-link">Про нас</a>
                <a href="#what-we-do" class="nav-link scroll-link">Що ми робимо</a>
{{--                <a href="/index.php?page=third" class="nav-link">Взяти участь</a>--}}
                <a href="#news" class="nav-link scroll-link">Новини</a>
                <a href="javascript:void(0)" class="nav-link headerOpenForm" >Стати волонтером </a>
                <a href="{{ env('APP_URL') }}{{app()->getLocale()}}/projects" class="nav-link">Проекти Ерлайт</a>
            </div>
            <div class="menu-line"></div>
        </div>

        <p class="sm-text">
            © 2018 Airlight. All rights <reserved class="br"></reserved>
            Cвидетельство №1451625 по адресу 03150 город Киев, ул.Антоновича 72.
            ОО "Эрлайт" создана в декабре 2015 г. с целью защиты прав и свобод мирных жителей, пострадавших в зоне АТО. Зарегистрировано
            Министерством Юстиции Украины ( Голосеевское районное управление в городе Киев) 17 декабря 2015года.
        </p>
    </div>
</footer>
