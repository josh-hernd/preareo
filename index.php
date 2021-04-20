<!DOCTYPE html>
<html lang="en">

<?php $titl = "PreAreo | Short Sale Experts"; ?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_partials/head.php') ?>

<body>
    <!-- Hold Header with Navigation Bar -->
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/_partials/navbar.php'); ?>
    <!-- Hold Main Content -->
    <section id="main" class="main">
        <!--<div class="content welcome">-->
        <!--    <h1>"Everyone deserves <br> a second chance"</h1>-->
        <!--</div>-->
        <!--Foreclose Section-->
        <div class="maincont">
            <div class="foreclose">
                <div class="halfs">
                    <h2>Are you facing a foreclosure and hoping for a way out?</h2>
                    <p>A Short Sale may be at your advantage! We are Short Sale Experts who can help you and your lender
                        identify your best options.</p>
                    <div class="button_wrapper"><a href="/public/learn-more.php" class="button">Learn More</a></div>
                </div>
                <div class="halfs"><object data="/images/foreclosure-help.svg" type=""></object></div>
            </div>
        </div>
        <!--Key Points-->
        <div class="content">
            <div class="oval">
                <h2>See how PreAreo can help</h2>
            </div>
            <div class="keypoints">
                <div class="points">
                    <div class="img_wrap">
                        <object data="/images/be-informed-216.svg" type=""></object>
                    </div>
                    <h1>Be <br> informed</h1>
                    <p>Find out what your options are before making a decision.</p>
                    <!--<div class="button_wrapper"><a href="/public/contact.php" class="button">Contact Us</a></div>-->
                </div>
                <div class="points">
                    <div class="img_wrap">
                        <object data="/images/diminish-credit-damage.svg" type=""></object>
                    </div>
                    <h1>Diminish <br> Credit Damage</h1>
                    <p>Avoid foreclosure’s negative impact on your credit.</p>
                    <!--<div class="button_wrapper"><a href="/public/contact.html" class="button">Contact Us</a></div>-->
                </div>
                <div class="points">
                    <div class="img_wrap">
                        <object data="/images/reclaim-your-future.svg" type=""></object>
                    </div>
                    <h1>reclaim <br> your future</h1>
                    <p>An opportunity to succeed, because your past shouldn't dictate your future</p>
                    <!--<div class="button_wrapper"><a href="/public/contact.php" class="button">Contact Us</a></div>-->
                </div>
            </div>
        </div>

        <!-- Hold Consultation Section -->
        <div class="content">
            <div class="consult">
                <h2>Don't ignore the problem</h2>
                <p>Book your free 15 minute consultation with one of our short sale experts.</p>
                <div class="button_wrapper"><a href="/public/contact.php" class="button">FREE CONSULTATION</a></div>
            </div>
        </div>
    </section>

    <!-- Hold Footer with Menu -->
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/_partials/footer.php'); ?>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/scripts/paths.php'); ?>
    <script src="/js/nav.js"></script>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/scripts/contact_event.php'); ?>

</body>

</html>