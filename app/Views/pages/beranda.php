<section>
    <header class="header__container" style="margin-top: 10%;">
        <div class="header__content">
        <h1 data-aos="fade-right" data-aos-duration="300">
            Selamat Datang Di <span class="fw-bold"><?= $title ?></span>
            <br>Kec. Kerajaan, Kab. Pak Pak Bharat
        </h1>
        <p data-aos="fade-right" data-aos-duration="600" data-aos-delay="300">
            Ini nanti diisi perkenalan desa <?= $title ?>
        </p>
        <form action="/" data-aos="fade-right" data-aos-duration="200" data-aos-delay="100">
            <div class="input__row">
            <div class="input__group">
                <h5>Lokasi</h5>
                <div>
                <span><i id="logo-lokasi" class="ri-map-pin-line"></i></span>
                <p style="font-weight: bold; margin-bottom: 0;">Medan, Sumatera Utara</p>
                </div>
            </div>
            <div class="button__row">
                <!-- <a target="_blank" href="" type="button" class="btn-a btn-whatsapp">
                <i class="ri-whatsapp-fill"></i>
                </a> -->
                <a target="_blank" href="" type="button" class="btn-a btn-maps">
                <i class="ri-map-pin-fill"></i>
                </a>
            </div>
            </div>
        </form>
        </div>
    </header>
</section>
<!-- SELESAI -->

<section>
</section>

<section>

</section>
<!-- VISI DAN MISI -->
<section>
    <div class="visi-misi__container">
        <h1 data-aos="fade-up">VISI</h1>
        <div class="visi" data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom" data-aos-delay="100">
        <p>Ini Visi</p>
        </div>

        <h1 class="misi-tittle" data-aos="fade-up" data-aos-delay="200">MISI</h1>
        <div class="misi" data-aos="fade-up"
        data-aos-anchor-placement="bottom-bottom" data-aos-delay="200">
        <ul>
            <li>Misi 1</li>
            <li>Misi 2</li>
            <li>Misi 3</li>
        </ul>
        </div>
    </div>
</section>
<!-- END VISI MISI -->

<!-- GALLERY -->
<section class="gallery">
    <div class="gallery__container">
        <div class="background-image"></div>
        <h1 class="gallery__title" data-aos="fade-up" data-aos-duration="800">Galeri Dokumentasi</h1>
        <div class="galleryimage">
        <!-- Foto akan dimuat secara dinamis dengan JavaScript -->
        </div>
        <div class="bullets">
        <!-- Bullet akan dimuat secara dinamis dengan JavaScript -->
        </div>
    </div>
</section>
<!-- GALLERY END -->