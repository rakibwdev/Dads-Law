<?php
get_header();?>

<div class="body-container">

    <section class="banner no-bg">
        <div class="container">
            <div class="columns">
                <div class="column-full block">
                    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                    <h1>404</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="columns">
                <div class="column-66 center block">
                  <h2>Oops! Our apologies, but this page seems to be missing.</h2>
                  <p>This might be because you typed the address wrong, or the page you’re looking for may have been moved or deleted.</p>
                  <a title="navigate to homepage" href="/" class="btn">Go To Homepage</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer();?>