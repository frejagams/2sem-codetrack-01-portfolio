<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */
/** @var \App\Dto\ProjectDto[] $projects */

$this->extend('layout');
?>

<?php $this->start('title', 'Projects') ?>

<section class="page-header">
    <div class="container">
        <h1 class="page-heading">
            Mine projekter
        </h1>
        <p class="page-intro">
            Welcome to my project showcase! Here you'll find a collection of my recent work, highlighting my skills in web development and software engineering. Each project demonstrates my commitment to creating clean, efficient, and user-friendly solutions.
        </p>
    </div>
</section>

<section class="project-list">
    <div class="container">
        <div class="project-grid">
            <?php foreach ($projects as $index => $project): ?>
                <div
                    class="project-row <?= $index % 2 === 1 ? 'project-row--reverse' : '' ?>"
                >
                    <div class="project-image">
                        <img
                            src="images/TIKTRUE.png"
                            alt="Tiktrue billede"
                        >
                    </div>
                    <div class="project-content">
                        <h2>
                            1 semester eksamen - 'TikTrue'
                        </h2>
                        <p class="project-description">
                            Til min eksamen på 1 semester udviklede jeg prototypen 'TikTrue', en app, som skal hjælpe og guide unge piger med at gennemskue falske hudplejemyter på TikTok.
                        </p>
                        <p class="technologies">
                            <strong>Technologies:</strong>
                            HTML, CSS, FIGMA
                        </p>
                        <div class="project-actions">
                            <a
                                href="http://tiktrueapp.frejagamstrup.dk/"
                                class="btn-view-project"
                            >
                                Se projektet
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
