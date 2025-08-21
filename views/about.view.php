<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */

$this->extend('layout');
?>

<?php $this->start('title', 'About Me') ?>

<section class="page-header">
    <div class="container">
        <h1 class="page-heading">
            Lidt om mig
        </h1>
        <p class="page-intro">
            Her kan du få et indblik i min rejse, mine kompetencer og min passion for
            multimediedesign.
            Jeg brænder for at skabe elegante og kreative løsninger, hvor æstetik og
            funktionalitet går hånd i hånd.
        </p>
    </div>
</section>

<section class="bio">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2 class="section-heading">Hvem er jeg?</h2>
                <p>
                <div class="about-me">
                    <p>
                        Hej, jeg hedder Freja — jeg er 25 år og studerer Multimediedesign.
                        Jeg har en stor passion for æstetik, grafisk design og visuel kommunikation,
                        og jeg elsker at skabe digitale løsninger, der både er brugervenlige og visuelt tiltalende.
                    </p>
                    <p>
                        Min rejse inden for multimediedesign begyndte med en fascination af, hvordan visuelle udtryk
                        kan fortælle historier og påvirke følelser. Med tiden har det udviklet sig til en dyb interesse
                        for at kombinere design, teknologi og kommunikation på en måde, der giver mening og værdi.
                    </p>
                    <p>
                        Når jeg ikke arbejder med designprojekter, holder jeg af at udforske nye trends inden for digital æstetik,
                        eksperimentere med kreative værktøjer og hente inspiration i kunst, mode og moderne medier.
                        Mit mål er at videreudvikle mine kompetencer og skabe design, der kan skabe en stærk visuel og emotionel forbindelse.
                    </p>
                </div>


            <div class="computerbillede">
                <img src="images/com.png" alt="computer" class="computerbillede">
            </div>
        </div>
    </div>
</section>

<section class="skills section-padding">
    <div class="container">
        <h2 class="section-heading">Skills</h2>
        <div class="skill-items">
            <span class="skill-tag">HTML</span>
            <span class="skill-tag">CSS</span>
            <span class="skill-tag">Figma</span>
            <span class="skill-tag">Grafisk design</span>
            <span class="skill-tag">Æstetik</span>
        </div>
    </div>
</section>
