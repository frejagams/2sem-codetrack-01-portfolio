<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'Welcome') ?>

<section class="hero section-padding">
    <div class="container">
        <h1>Welcome to my<span class="accent">PORTFOLIO</span></h1>
        <h5>Freja Gamstrup - Multimediedesignstuderende</h5>
        <p class="tagline"></p>
        <a href="/contact" class="button">Kontakt mig her</a>
    </div>
</section>

<section class="intro section-padding">
    <div class="container">
        <div class="intro-content">
            <div class="intro-text">
                <h2 class="section-heading">Lidt om mig</h2>
                <p>Jeg studerer multimediedesign og har en særlig interesse for grafisk design. Jeg elsker at arbejde med visuel identitet, layout og kreativ formidling, hvor jeg kan kombinere æstetik og funktionalitet for at skabe design, der fanger og engagerer.</p>
                </p>
            </div>
            <div class="intro-image">
                <img src="images/pb.jpg" alt="Billede af mig" class="profile-image">
            </div>
        </div>
    </div>
</section>

<section class="quick-links section-padding">
    <div class="container">
        <h2 class="section-heading">Explore More</h2>
        <div class="links-grid">
            <a href="/projects" class="link-card">
                <h3>Projekter</h3>
                <p>Se eksempler på mine seneste projekter</p>
            </a>
            <a href="/about" class="link-card">
                <h3>Om mig</h3>
                <p>Lær mere om mig, og hvad jeg kan tilbyde</p>
            </a>
            <a href="/contact" class="link-card">
                <h3>Kontakt</h3>
                <p>Find mine kontaktoplysninger her</p>
            </a>
        </div>
    </div>
</section>
