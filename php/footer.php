<!-- Pagination -->
<?php if (($url->whereAmI() == 'home') && Paginator::numberOfPages() > 1): ?>
<nav>
    <!-- Previous button -->
    <?php if (Paginator::showPrev()): ?>
        <a style="float:left;" href="/<?php echo Paginator::previousPageUrl() ?>" tabindex="-1"> <-- Previous </a>
    <?php else: ?>
        <span style="float:left;"> <-- Previous </span>
    <?php endif; ?>

    <!-- Next button -->
    <?php if (Paginator::showNext()): ?>
        <a style="float:right;" href="/<?php echo Paginator::nextPageUrl() ?>" tabindex="-1"> Next --> </a>
    <?php else: ?>
        <span style="float:right;"> Next --> </span>
    <?php endif; ?>
</nav>
<br />
<hr />
<?php endif ?>

<span style='color: #5BCEFA'>tra</span>ns rig<span style='color: #F5A9B8'>hts</span> | <span style='color: #FFF430'>btw</span> ur <span style='color: #9C59D1'>cute</span> <!-- Powered by Bludit --> 
