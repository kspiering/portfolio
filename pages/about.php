<?php
$title = "About";

$birthDate = '2001-06-08';
$today = new DateTime();
$birth = new DateTime($birthDate);
$age = $today->diff($birth)->y;
?>
<?php include "attributes/header.php"; ?>
<!-- Navigation-->

<section class="about__main main">
    <div class="about__content2">
        <div class="homepage__img">
            <img src="/assets/images/Profilbild.png" alt="Profile Picture Kim Spiering">
        </div>
    </div>

    <div class="about__content">
        <h1>About me</h1>
        <p>My name is Kim Spiering, I’m <?php echo $age ?> years old, and I live in Wettingen, Switzerland.
            I’m passionate about problem-solving, which I nurture through my love of escape rooms, riddles, and strategy card games.
            These interests help me think creatively and critically - skills I bring to every project I work on.</p>

        <div class="homepage__button">
            <button class="button__transparent"><a class="button__linkColored" href="../pages/contact.php">Contact</a></button>
            <button><a class="button__linkTransparent" href="/projects">My Work</a></button>
        </div>
    </div>
</section>
<section class="aboutMe">
    <div class="about__love">
        <img src="/assets/images/heart.png" alt="Heart Symbol">
        <h2>What I Love</h2>
        <p>Aside from coding and creating websites, I’m also an avid painter and anime fan. This artistic side inspires the design aspect
            of my work, blending creativity with technical skills to deliver unique and visually appealing websites.</p>
    </div>
    <div class="about__do">
        <img src="/assets/images/check.png" alt="Check Symbol">
        <h2>What I Do</h2>
        <p> My goal is to craft websites that are tailored to you and your preferences, combining functionality with aesthetic appeal.
        </p>
    </div>

</section>
<section id="skills">
    <h2>My Skillset</h2>

    <div class="skill-category">
        <h3>Web Development</h3>
        <ul>
            <li>HTML5, CSS, JavaScript, PHP, Bootstrap</li>
            <li>Responsive Design, Git, CMS</li>
            <li><a href="https://github.com/kspiering" target="_blank" rel="noopener noreferrer" class="github-link">GitHub</a></li>
        </ul>
    </div>

    <div class="skill-category">
        <h3>Databases & APIs</h3>
        <ul>
            <li>SQLite, MySQL, Bruno, TablePlus</li>
            <li>APIs & Integrations</li>
        </ul>
    </div>

    <div class="skill-category">
        <h3>Frameworks & Libraries</h3>
        <ul>
            <li>Laravel, React, TypeScript, Vue.js Tailwind, Bootstrap</li>
        </ul>
    </div>

    <div class="skill-category">
        <h3>Design & Creative Suite</h3>
        <ul>
            <li>Adobe Illustrator, InDesign, Adobe XD, Acrobat, Photoshop</li>
        </ul>
    </div>

    <div class="skill-category">
        <h3>Software & Tools</h3>
        <ul>
            <li>Trello, Anyshare, Canva, Bynder, Windows, iOS, Salesforce</li>
            <li>Google Dienste, Microsoft Ads, QR-Code Chimp, Microsoft Navision Web Client</li>
            <li>Video Editing: Wondershare Filmora</li>
        </ul>
    </div>

    <div class="skill-category">
        <h3>Other</h3>
        <ul>
            <li>MS Office ICT Advanced-User SIZ</li>
        </ul>
    </div>
</section>


<section class="about__downloads">
    <h2>Downloads</h2>
    <table>
        <tr>
            <th>Name</th>
            <th class="align-right">PDF File</th>
        </tr>
        <tr>
            <td>CV</td>
            <td class="align-right"><a target="_blank" href="../assets/docs/Lebenslauf Kim Spiering.pdf"><img class="download__img" src="/assets/images/download.png" alt="download image"></a></td>
        </tr>
        <tr>
            <td>Job reference</td>
            <td class="align-right"><a target="_blank" href="../assets/docs/Arbeitszeugnis-Kim-Spiering.pdf"><img class="download__img" src="/assets/images/download.png" alt="download image"></a></td>
        </tr>
        <tr>
            <td>Diploma Webdevelopment <small>(official diploma comes 2025-09)</small></td>
            <td class="align-right"><a target="_blank" href="../assets/docs/Bestätigung-SAE.pdf"><img class="download__img" src="/assets/images/download.png" alt="download image"></a></td>
        </tr>
        <tr>
            <td>Diploma Marketing</td>
            <td class="align-right"><a target="_blank" href="../assets/docs/Diploma-Kim-Spiering.pdf"><img class="download__img" src="/assets/images/download.png" alt="download image"></a></td>
        </tr>

    </table>
</section>

<!-- Footer-->
<?php include "attributes/footer.php"; ?>