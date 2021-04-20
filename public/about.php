<!DOCTYPE html>
<html lang="en">

<?php $titl = "PreAreo | About Us"; ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/_partials/head.php') ?>

<body>
    <!-- Hold Header with Navigation Bar -->
    <?php require($_SERVER['DOCUMENT_ROOT'].'/_partials/navbar.php');?>
    
 <!-- Hold Main Content -->
<section id="main" class="main">
    <div class="content about">
        <h1>About Us</h1>
    </div>
    <div class="content">
        <div class="title_descript">
        <h2>We are short sale experts</h2>
    </div>
        <div class="description">
        <p>We are Short Sale experts who can help you and your lender identify your best options.
            <br><br>
            This will not add any more financial distress, due to us being compensated directly by your
            lender. Which means that we will be helping you at no cost.
            <br><br>
            FREE is always a marvelous word to hear when we need it most!</p>
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