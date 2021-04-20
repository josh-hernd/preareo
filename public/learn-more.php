<!DOCTYPE html>
<html lang="en">

<?php $titl = "PreAreo | Learn More"; ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/_partials/head.php') ?>


<body>
    <!-- Hold Header with Navigation Bar -->
    <?php require($_SERVER['DOCUMENT_ROOT'].'/_partials/navbar.php');?>
    <!-- Hold Main Content -->
    <section id="main" class="main">
        <div class="content learn">
            <h1>Learn More</h1>
        </div>
        <div class="content">
            <div class="title_descript">
                <h2>What is a short sale?</h2>
            </div>
            <div class="description">
                <p>In Real Estate a Short Sale is when a financially distressed homeowner sells their property for which
                    the lender is willing to accept less than the total amount owed on the mortgage.</p>
            </div>
            <div class="title_descript">
                <h2>Benefits of a short sale:</h2>
            </div>
            <div class="description">
                <p>-  Eliminate remaining mortgage debt.
                    <br>
                    -  The process plays out more like a traditional sale, rather 
                        than a judicial involvement.
                        <br>
                    -  Possible relocation fee as opposed to an eviction.
                    <br>
                    -  Avoid foreclosure’s negative impact on your credit.
                    <br>
                    -  Possible opportunity to qualify for a future mortgage 
                        in 2  years.
                    </p>
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
<?php require($_SERVER['DOCUMENT_ROOT'].'/_partials/footer.php');?>
<?php require($_SERVER['DOCUMENT_ROOT'].'/scripts/paths.php');?>
    <script src="/js/nav.js"></script>
</body>

</html>