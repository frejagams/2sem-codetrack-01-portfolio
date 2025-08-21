<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */
/** @var array<string, string> $old */
/** @var \App\Http\Request $request */

$this->extend('layout');
?>

<?php $this->start('title', 'Contact Me') ?>

<section class="page-header">
    <div class="container">
        <h1 class="page-heading">
            Kontakt mig her
        </h1>
        <p class="page-intro">
            Har du et spørgsmål eller lyst til at samarbejde?
            Jeg vil meget gerne høre fra dig!
            Du er velkommen til at kontakte mig via formularen herunder eller gennem mine sociale medier.
        </p>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h2>
                    Mine kontaktoplysninger
                </h2>
                <p>
                    Jeg vil rigtig gerne høre fra dig!
                    Uanset om du har et spørgsmål til mit arbejde, ønsker at drøfte et muligt projekt,
                    eller bare vil sige hej, er du altid velkommen til at tage kontakt.
                </p>

                <ul class="contact-details">
                    <li>
                        <strong>
                            Email:
                        </strong>
                        <a href="mailto:frejagamstrup@gmail.com">
                           Frejagamstrup@gmail.com
                        </a>
                    </li>
                    <li>
                        <strong>
                            Phone:
                        </strong>
                        <a href="tel:+4512345678">
                            +45 21174670</a>
                    </li>
                    <li>
                        <strong>
                            Location:
                        </strong>
                        <span>
                            Ringsted, Danmark
                        </span>
                    </li>
                </ul>

                <blockquote>

                </blockquote>
            </div>

            <div class="contact-form">
                <h2>
                    Send mig en besked
                </h2>

                <form action="/contact" method="post">
                    <input
                        type="hidden"
                        name="_token"
                        value="<?= htmlspecialchars($request->getCsrfToken()) ?>"
                    >

                    <div class="form-group">
                        <label for="name">
                           Dit navn:
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="<?= $old['name'] ?? '' ?>"
                            class="<?= !empty($errors['name']) ? 'has-error' : '' ?>"
                            aria-required="true"
                        >
                        <?php if (!empty($errors['name'])): ?>
                            <div class="field-error">
                                <?= htmlspecialchars($errors['name'][0]) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="email">
                            E-mail adresse:
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="<?= $old['email'] ?? '' ?>"
                            class="<?= !empty($errors['email']) ? 'has-error' : '' ?>"
                            aria-required="true"
                        >
                        <?php if (!empty($errors['email'])): ?>
                            <div class="field-error">
                                <?= htmlspecialchars($errors['email'][0]) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="subject">
                            Emne:
                        </label>
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            value="<?= $old['subject'] ?? '' ?>"
                            class="<?= !empty($errors['subject']) ? 'has-error' : '' ?>"
                            aria-required="true"
                        >
                        <?php if (!empty($errors['subject'])): ?>
                            <div class="field-error">
                                <?= htmlspecialchars($errors['subject'][0]) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="message">
                            Skriv her:
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            class="<?= !empty($errors['message']) ? 'has-error' : '' ?>"
                            aria-required="true"
                        ><?=
                            $old['message'] ?? ''
                        ?></textarea>
                        <?php if (!empty($errors['message'])): ?>
                            <div class="field-error">
                                <?= htmlspecialchars($errors['message'][0]) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <button
                        type="submit"
                        class="button"
                    >
                        Send besked
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
