<!-- navbar -->

<!-- page header -->
<div class="container" id="home">
    <div class="col-12 text-center">
        <div class="tm-page-header">
            <h1 class="d-inline-block text-uppercase">Imkersvereniging Oestgeest</h1>
        </div>
    </div>
</div>
<div class="tm-nav-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#tmMainNav"
                        aria-controls="tmMainNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="tmMainNav">
                        <ul class="navbar-nav mx-auto tm-navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link external" href="homepage.php">Homepages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external" href="basiscursus.php">Basiscursus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external" href="https://www.bijenhouders.nl/cursussen/voortgezet-imkeren/fd39WNRYnK#info">voortgezet imkeren</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external" href="informatie.php">informatie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external" href="links.php">links</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external" href="contact.php">contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link external" href="artikelen.php">artikelen</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-1.9.1.min.js"></script>
<!-- Single Page Nav plugin works with this version of jQuery -->
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    /**
     * detect IE
     * returns version of IE or false, if browser is not Internet Explorer
     */
    function detectIE() {
        var ua = window.navigator.userAgent;

        var msie = ua.indexOf("MSIE ");
        if (msie > 0) {
            // IE 10 or older => return version number
            return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
        }

        var trident = ua.indexOf("Trident/");
        if (trident > 0) {
            // IE 11 => return version number
            var rv = ua.indexOf("rv:");
            return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
        }

        // var edge = ua.indexOf('Edge/');
        // if (edge > 0) {
        //     // Edge (IE 12+) => return version number
        //     return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        // }

        // other browser
        return false;
    }

    function setVideoHeight() {
        const videoRatio = 1920 / 1080;
        const minVideoWidth = 400 * videoRatio;
        let secWidth = 0,
            secHeight = 0;

        secWidth = videoSec.width();
        secHeight = videoSec.height();

        secHeight = secWidth / 2.13;

        if (secHeight > 600) {
            secHeight = 600;
        } else if (secHeight < 400) {
            secHeight = 400;
        }

        if (secWidth > minVideoWidth) {
            $("video").width(secWidth);
        } else {
            $("video").width(minVideoWidth);
        }

        videoSec.height(secHeight);
    }

    // Parallax function
    // https://codepen.io/roborich/pen/wpAsm
    var background_image_parallax = function($object, multiplier) {
        multiplier = typeof multiplier !== "undefined" ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({ "background-attatchment": "fixed" });
        $(window).scroll(function() {
            var from_top = $doc.scrollTop(),
                bg_css = "center " + multiplier * from_top + "px";
            $object.css({ "background-position": bg_css });
        });
    };

    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $(".scrolltop:hidden")
                .stop(true, true)
                .fadeIn();
        } else {
            $(".scrolltop")
                .stop(true, true)
                .fadeOut();
        }

        // Make sticky header
        if ($(this).scrollTop() > 158) {
            $(".tm-nav-section").addClass("sticky");
        } else {
            $(".tm-nav-section").removeClass("sticky");
        }
    });

    let videoSec;

    $(function() {
        if (detectIE()) {
            alert(
                "Please use the latest version of Edge, Chrome, or Firefox for best browsing experience."
            );
        }

        const mainNav = $("#tmMainNav");
        mainNav.singlePageNav({
            filter: ":not(.external)",
            offset: $(".tm-nav-section").outerHeight(),
            updateHash: true,
            beforeStart: function() {
                mainNav.removeClass("show");
            }
        });

        videoSec = $("#tmVideoSection");

        // Adjust height of video when window is resized
        $(window).resize(function() {
            setVideoHeight();
        });

        setVideoHeight();

        $(window).on("load scroll resize", function() {
            var scrolled = $(this).scrollTop();
            var vidHeight = $("#hero-vid").height();
            var offset = vidHeight * 0.6;
            var scrollSpeed = 0.25;
            var windowWidth = window.innerWidth;

            if (windowWidth < 768) {
                scrollSpeed = 0.1;
                offset = vidHeight * 0.5;
            }

            $("#hero-vid").css(
                "transform",
                "translate3d(-50%, " + -(offset + scrolled * scrollSpeed) + "px, 0)"
            ); // parallax (25% scroll rate)
        });

        // Parallax image background
        background_image_parallax($(".tm-parallax"), 0.4);

        // Back to top
        $(".scroll").click(function() {
            $("html,body").animate(
                { scrollTop: $("#home").offset().top },
                "1000"
            );
            return false;
        });
    });
</script>
