<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Homepage</title>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate-style.css" />
    <!--
-->
</head>

<body>

<?php
require_once 'navbar.php';
?>

<!-- Video Banner -->
<section class="tm-banner-section" id="tmVideoSection">
    <div class="container tm-banner-text-container">
        <div class="row">
            <div class="col-12">
                <header>
                    <h2 class="tm-banner-title">   Het houden van bijen!</h2>
                    <p>
                        De imkervereniging Oegstgeest en omstreken strekt zich uit over de regio Oegstgeest, Leiden, Lisse, Kaag en Braassem. De imkervereniging stelt zich ten doel de kennis over het houden van bijen en de relatie van bijen met hun (planten) omgeving te verbreden bij zowel de imkers, als bij het grotere publiek.
                    </p>
                </header>
            </div>
        </div>
    </div>

    <!-- Video -->
    <video id="hero-vid" autoplay="" loop="" muted>
        <source src="videos/bee.mp4" type="video/mp4" />
    </video>

</section>
<!-- Features -->
<div class="container tm-features-section" id="features">
    <div class="row tm-features-row">
        <section class="col-md-6 col-sm-12 tm-feature-block">
            <header class="tm-feature-header">
                <h3 class="tm-feature-h">Onze activiteiten</h3>
            </header>
            <p>
            <li>het geven van cursussen over het houden van bijen (zie de pagina ‘basiscursus‘)</li>
            <br>
            <li>het organiseren van lezingen op informatieavonden voor de beginnende imkers</li>
            <br>
            </p>
        </section>
        <section class="col-md-6 col-sm-12 tm-feature-block">
            <header class="tm-feature-header">
            </header>
            <p>
            <li>wij stellen beginnende imkers in de gelegenheid om informatie te krijgen van ervaren imkers tijdens informatieavonden en ochtenden, zoals ‘de imkerhoek’</li>
            <br>
            <li>wij versturen  interessante artikelen over het houden van bijen (zie de pagina artikelen)</li>
            </p>
        </section>
    </div>
</div>

<!-- Activities -->
<!--<div class="container" id="activities">-->
<!--    <div class="row">-->
<!--        <div class="col-12">-->
<!--            <div class="tm-parallax">-->
<!--                <header class="tm-parallax-header">-->
<!--                    <h2 class="">Activities</h2>-->
<!--                </header>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--        <div class="col-lg-6">-->
<!--            <div class="tm-activity-block">-->
<!--                <div class="tm-activity-img-container">-->
<!--                    <img src="img/img-01.jpg" alt="Image" class="tm-activity-img" />-->
<!--                </div>-->
<!--                <div class="tm-activity-block-text">-->
<!--                    <h3 class="tm-text-blue">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p>-->
<!--                        Orci varius natoque penatibus et magnis dis parturient montes,-->
<!--                        nascetur ridiculus mus. Sed eu turpis nec sem lacinia-->
<!--                        condimentum et a orci.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-6">-->
<!--            <div class="tm-activity-block mr-lg-0 ml-lg-auto">-->
<!--                <div class="tm-activity-img-container">-->
<!--                    <img src="img/img-02.jpg" alt="Image" class="tm-activity-img" />-->
<!--                </div>-->
<!--                <div class="tm-activity-block-text">-->
<!--                    <h3 class="tm-text-blue">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p>-->
<!--                        Orci varius natoque penatibus et magnis dis parturient montes,-->
<!--                        nascetur ridiculus mus. Sed eu turpis nec sem lacinia-->
<!--                        condimentum et a orci.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-6">-->
<!--            <div class="tm-activity-block">-->
<!--                <div class="tm-activity-img-container">-->
<!--                    <img src="img/img-03.jpg" alt="Image" class="tm-activity-img" />-->
<!--                </div>-->
<!--                <div class="tm-activity-block-text">-->
<!--                    <h3 class="tm-text-blue">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p>-->
<!--                        Orci varius natoque penatibus et magnis dis parturient montes,-->
<!--                        nascetur ridiculus mus. Sed eu turpis nec sem lacinia-->
<!--                        condimentum et a orci.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-6">-->
<!--            <div class="tm-activity-block mr-lg-0 ml-lg-auto">-->
<!--                <div class="tm-activity-img-container">-->
<!--                    <img src="img/img-04.jpg" alt="Image" class="tm-activity-img" />-->
<!--                </div>-->
<!--                <div class="tm-activity-block-text">-->
<!--                    <h3 class="tm-text-blue">Lorem ipsum dolor sit amet</h3>-->
<!--                    <p>-->
<!--                        Orci varius natoque penatibus et magnis dis parturient montes,-->
<!--                        nascetur ridiculus mus. Sed eu turpis nec sem lacinia-->
<!--                        condimentum et a orci.-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<section class="container tm-company-section" id="company">-->
<!--    <div class="row">-->
<!--        <div class="col-xl-9 col-lg-8 col-md-12 tm-company-left">-->
<!--            <div class="tm-company-about">-->
<!--                <div class="tm-company-img-container">-->
<!--                    <img src="img/img-05.jpg" alt="Image" />-->
<!--                </div>-->
<!--                <div class="tm-company-about-text">-->
<!--                    <header>-->
<!--                        <h2 class="tm-company-about-header">Our Company</h2>-->
<!--                    </header>-->
<!--                    <p>-->
<!--                        Phasellus fringilla convallis libero non aliquam. Morbi justo-->
<!--                        lorem, varius ultricies pulvinar ac, aliquet quis ipsum.-->
<!--                    </p>-->
<!--                    <p class="mb-4">-->
<!--                        Suspendisse aliquam pulvinar odio sed rhoncus. Cras pretium diam-->
<!--                        ut metus tristique, a ultricies sapien euismod. Duis dui diam,-->
<!--                        maximus ac ligula a, accumsan cursus ante.-->
<!--                    </p>-->
<!--                    <a href="#" class="btn tm-btn tm-float-right">Read More</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div-->
<!--            class="col-xl-9 col-lg-4 col-md-12 tm-company-right  ml-lg-auto mr-lg-0"-->
<!--        >-->
<!--            <div class="tm-company-right-inner">-->
<!--                <ul class="nav nav-tabs" id="tmCompanyTab" role="tablist">-->
<!--                    <li class="nav-item">-->
<!--                        <a-->
<!--                            class="nav-link tm-nav-link-border-right active"-->
<!--                            id="vision-tab"-->
<!--                            data-toggle="tab"-->
<!--                            href="#vision"-->
<!--                            role="tab"-->
<!--                            aria-controls="vision"-->
<!--                            aria-selected="true"-->
<!--                        >Vision</a-->
<!--                        >-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a-->
<!--                            class="nav-link tm-no-border-right"-->
<!--                            id="mission-tab"-->
<!--                            data-toggle="tab"-->
<!--                            href="#mission"-->
<!--                            role="tab"-->
<!--                            aria-controls="mission"-->
<!--                            aria-selected="false"-->
<!--                        >Mission</a-->
<!--                        >-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <div class="tab-content" id="tmTabContent">-->
<!--                    <div-->
<!--                        class="tab-pane fade show active"-->
<!--                        id="vision"-->
<!--                        role="tabpanel"-->
<!--                        aria-labelledby="vision-tab"-->
<!--                    >-->
<!--                        <p>-->
<!--                            Phasellus suscipit sapien magna, vel dictum lorem fringilla.-->
<!--                        </p>-->
<!--                        <p>-->
<!--                            Class aptent taciti sociosqu ad litora torquent per conubia-->
<!--                            nostra.-->
<!--                        </p>-->
<!--                        <p>-->
<!--                            Nulla ornare ligula nibh, sit amet tristique magna efficitur-->
<!--                            eu.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                    <div-->
<!--                        class="tab-pane fade"-->
<!--                        id="mission"-->
<!--                        role="tabpanel"-->
<!--                        aria-labelledby="mission-tab"-->
<!--                    >-->
<!--                        <p>-->
<!--                            Class aptent taciti sociosqu ad litora torquent per conubia-->
<!--                            nostra.-->
<!--                        </p>-->
<!--                        <p>-->
<!--                            Nulla ornare ligula nibh, sit amet tristique magna efficitur-->
<!--                            eu.-->
<!--                        </p>-->
<!--                        <p>-->
<!--                            Phasellus suscipit sapien magna, vel dictum lorem fringilla.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- Contact -->
<!--<section class="container tm-contact-section" id="contact">-->
<!--    <div class="row">-->
<!--        <div class="col-xl-5 col-lg-6 col-md-12 tm-contact-left">-->
<!--            <div class="tm-contact-form-container ml-auto mr-0">-->
<!--                <header>-->
<!--                    <h2 class="tm-contact-header">Contact Us</h2>-->
<!--                </header>-->
<!--                <form action="index.html" class="tm-contact-form" method="POST">-->
<!--                    <div class="form-group">-->
<!--                        <input-->
<!--                            type="text"-->
<!--                            id="contact_name"-->
<!--                            name="contact_name"-->
<!--                            class="form-control"-->
<!--                            placeholder="Name"-->
<!--                            required-->
<!--                        />-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <input-->
<!--                            type="email"-->
<!--                            id="contact_email"-->
<!--                            name="contact_email"-->
<!--                            class="form-control"-->
<!--                            placeholder="Email"-->
<!--                            required-->
<!--                        />-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                <textarea-->
<!--                    rows="5"-->
<!--                    id="contact_message"-->
<!--                    name="contact_message"-->
<!--                    class="form-control"-->
<!--                    placeholder="Message"-->
<!--                    required-->
<!--                ></textarea>-->
<!--                    </div>-->
<!--                    <div class="tm-text-right">-->
<!--                        <button type="submit" class="btn tm-btn tm-btn-big">-->
<!--                            Send It-->
<!--                        </button>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-xl-7 col-lg-6 col-md-12 tm-contact-right">-->
<!--            <div class="tm-contact-figure-block">-->
<!--                <figure class="d-inline-block">-->
<!--                    <img src="img/img-06.jpg" alt="Image" class="img-fluid" />-->
<!--                    <figcaption class="tm-contact-figcaption">-->
<!--                        Nulla arcu tortor, mattis in diam eget, hendrerit vulputate-->
<!--                        ligula. Nam non purus consequat, dictum lectus lobortis, laoreet-->
<!--                        nibh. Cras vitae facilisis felis. Phasellus tristique.-->
<!--                    </figcaption>-->
<!--                </figure>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<?php
require_once 'footer.php';
?>


</body>
</html>
