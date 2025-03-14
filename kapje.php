<?php
/* Template Name: Kapje & Co */
?>

<?php get_header(); // Laadt header.php ?>

<section class="afgelopen-reizen" style="height: auto !important;">
            <div class="kapje-wp">
                <div class="afgelopen-reizen-container">
                    <div class="ar-wrapper">
                        <div class="kapje-logo-rond"></div>
                        <div class="ar-box-1">
                            <h1 class="mobile-p-h1" style="color: #C1282F; font-family: Playfair Display, serif; font-weight: bold; font-style: normal; font-size: 58px; ">Kapje & Co <br> kindertheater </h1>
                            <p style="color: #C1282F; font-family: Playfair Display, serif; font-weight: bold; font-style: normal; font-size: 27px;">Branding & social media</p>
                            <div class="ar-blocks">
                                <div class="ar-block1" style="background-color: #000"></div>
                                <div class="ar-block2" style="background-color: #C1282F"></div>
                                <div class="ar-block3" style="background-color: #E47D82"></div>
                                <div class="ar-block4" style="background-color: #fff"></div>
                            </div>

                            <div class="ar-images">
                                <div class="kapje1-1"></div>
                                <div class="kapje-logo"></div>
                            </div>
                        </div>
                        <div class="kapje-box-2"></div>
                    </div>
                </div>
            </div>
    </section>

    <section class="img-text" style="width: 1000px;">
        <div class="img-kapje"></div>
        <div class="content-split">
            <h1 style="font-family: 'boes_branding_v2regular'; color: #525252; font-size: 48px; margin: 0px;">Kapje <span style="font-family: BlushesBold;">&</span> Co</h1>
            <p style="font-family: 'Cabin'; color: #525252; font-size: 18px;">Deze sprookjesachtige theatergroep voor kinderen treedt op in verschillende pretparken en sprookjesbossen. Hun 3 karakters; roodkapje, de wolf en de jager vormen de basis van hun hoofdacts. Hoewel dit begonnen was als hobby, wil deze theatergroep uitgroeien naar een winstgevend concept. Daarom legden ze bij ons de volgende vraag neer:</p>
        </div>
    </section>

    <section class="p-wp">
        <p style="width: 670px; color: #fff; font-family: 'boes_branding_v2regular'; font-size: 28px; text-align: center;">“Wij worden nog niet gezien als een serieuze partij. Vaak gaan klanten ervanuit dat we onze diensten gratis of voor weinig aanbieden. <br> Kan jij ons een betere positionering geven?”</p>
    </section>

    <section class="texture-content kapje-texture">
        <div class="texture-content-container">
            <div class="tc-images" style="justify-content: space-between;">
                <div class="kapje1"></div>
                <div class="kapje2"></div>
                <div class="kapje3"></div>
            </div>
            <div class="tc-text">
                <p style="font-family: 'BlushesBold'; font-size: 24px;">Logo ontwerp</p>
                <p style="font-size: 18px;"> Waar denk je aan bij een sprookje? dikke, scherpe strakke letters? Of toch sierlijke krulletters?  Wij hebben een lettertype gekozen dat echt een sprookje is! Dit vormt de basis van dit logo ontwerp gecombineerd met het & teken als showsteler; er is namelijk niet alleen 1 personage in deze theatergroep. Het lettertype is gebruikt om een sierlijk hartje te vormen als beeldmerk.</p>
            </div>
        </div>
        <div class="witte-lijn-1920"></div>
    </section>

    <section class="white-bg-content kapje-white">
        <div class="white-bg-container">
           
            
            <div class="white-bg-img-text">
            <div id="image-container" class="kapje-huisstijl"></div>
                <div class="white-bg-img-text-content">
                    <p style="font-family: 'BlushesBold'; font-size: 24px; margin: 0px;">Merkhandleiding</p>
                    <p style="font-size: 18px;">Omdat deze theatergroep zelf geen middelen gaat uitwerken hebben we een eenvoudige merkhandleiding ontwikkeld. Soms heeft deze een boekvorm, op andere momenten is deze een pagina groot. Dit heeft te maken met de complexiteit van de huisstijl en aan hoeveel mensen deze wordt overgedragen.</p>
                </div>
            </div>  
            <div class="tc-text" style="margin-top: 50px; padding: 50px;">
                <p style="font-family: 'BlushesBold'; font-size: 24px;">Social Media</p>
                <p style="font-size: 18px;">We hebben voor Kapje & Co 3 pilaren bedacht waarop templates zijn ontworpen. Personage profielen, show aankondigingen, en sprookjes weetjes. Kapje & Co heeft gekozen om alleen gebruik te maken van Instagram gezien hun doelgroep (recreatieparken) hier erg actief op is.</p>
            </div>

            <div class="tc-images" style="justify-content: space-between; margin-top: 25px;">
                <div class="kapjeco1"></div>
                <div class="kapjeco2"></div>
                <div class="kapjeco3"></div>
            </div>

            <div class="tc-text" style="margin-top: 50px; padding: 50px;">
                <p style="font-family: 'BlushesBold'; font-size: 24px;">Instagram Feed</p>
                <p style="font-size: 18px;">Hieronder een voorbeeld van het bedrijfsprofiel van Kapje & Co op Instagram. Bij het maken van de strategie is ook rekening gehouden met de thema’s en volgorde van de posts. Naast dat structuur voor meer interactie zorgt, geeft dat een gelikt uiterlijk aan het overzicht wanneer deze posts samenkomen.</p>
            </div>

     

            <div class="kapje-iphones"></div>  
        </div>
    </section>


<script>
// Selecteer de elementen door hun classnamen
const kapjeco1 = document.querySelector('.kapjeco1');
const kapjeco2 = document.querySelector('.kapjeco2');
const kapjeco3 = document.querySelector('.kapjeco3');

// Stel starttellers voor elke class in en maximale waarde voor de cyclus
let counter1 = 1;
let counter2 = 1;
let counter3 = 1;
const maxCycle = 3; // Verander dit naar het aantal classes in de cyclus

// Gebruik setInterval om elke 3 seconden een nieuwe class toe te voegen
setInterval(() => {
    // Verwijder de huidige class en voeg de volgende class toe in de cyclus
    if (kapjeco1) {
        kapjeco1.classList.remove(`kapjeco1-${counter1}`);
        counter1 = (counter1 % maxCycle) + 1;
        kapjeco1.classList.add(`kapjeco1-${counter1}`);
    }
    
    if (kapjeco2) {
        kapjeco2.classList.remove(`kapjeco2-${counter2}`);
        counter2 = (counter2 % maxCycle) + 1;
        kapjeco2.classList.add(`kapjeco2-${counter2}`);
    }
    
    if (kapjeco3) {
        kapjeco3.classList.remove(`kapjeco3-${counter3}`);
        counter3 = (counter3 % maxCycle) + 1;
        kapjeco3.classList.add(`kapjeco3-${counter3}`);
    }
}, 3000); // 3000 milliseconden = 3 seconden
</script>




    <section class="reizigers" style="position:relative;z-index: 9000;">
        <div class="reizigers-container">
            <h1 class="bbv2">De ervaring <br>
            van deze reiziger</h1>
            <div class="reizigers-img">
                <div class="daan" style="margin: 0 auto;"></div>
            </div>
            <p>“Nina heeft ons ontzorgt met een logo, huisstijl en social media pakket 
            voor onze nieuwe entertainment act Kapje en Co. Hierdoor konden wij ons volledig focussen op andere aspecten van het opzetten van onze act (scripts, kostuums en een pilot dag) en zijn we tegelijkertijd klaar om de act zo snel mogelijk op verschillende plekken aan te gaan bieden! Het is mooi om te zien hoe Nina met beperkt beschikbare informatie alsnog de ziel van onze act heeft weten te vangen. Ook heeft ze direct rekening gehouden met eventuele uitbreidingsplannen voor de toekomst. We zijn er heel erg blij mee!”
</p>
            <br><br><p style="font-family: 'BlushesBold'; font-size: 20px;"><span style="font-size: 30px">Daan van Kaauwen</span><br>
            <strong>Kapje & Co</strong></p>
        </div>
    </section>

    <!-- CSS voor styling -->
<style>
    .p-afgelopen-reizen {
        display: none !important;
    }
    .p-afgelopen-reizen.active {
        display: block !important;
    }
    .button-container {
        text-align: center;
        margin: 40px 0;
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-content: center;
        justify-content: center;
    }
</style>


<section class="meerzien">
    <h2>Meer zien?</h2>
    <!-- Project secties -->
    <section class="p-afgelopen-reizen active">
<div class="moons-wp">
                <div class="afgelopen-reizen-container">
                    <div class="ar-wrapper">
                        <div class="moons-bloem"></div>
                        <div class="ar-box-1">
                            <h1 class="mobile-p-h1" style="color: #8391C8; font-family: Moon, serif; font-weight: bold; font-style: normal; font-size: 58px; ">MOON'S<br> HUIDBALSEM </h1>
                            <p style="color: #8391C8; font-family: Moon, serif; font-weight: bold; font-style: normal; font-size: 27px;">BRANDING & PROMOTIE & SOCIAL MEDIA</p>
                            <div class="ar-blocks" style="justify-content: left; gap: 20px;">
                                <div class="ar-block1" style="background-color: #8391C8"></div>
                                <div class="ar-block2" style="background-color: #F3DDBB"></div>
                                <div class="ar-block3" style="background-color: #BEB6C4"></div>
                            </div>

                            <div class="ar-images">
                                <div class="moons-1"></div>
                                <div class="moons-2"></div>
                            </div>
                        </div>
                        <div class="moons-box-2"></div>
                        <div class="mobile-cta-box" style="margin: 25px auto; margin-bottom: 50px;">
                            <a href="/portfolio/moons-huidbalsem" class="boes-button-blue">Bekijk project</a>
                        </div>
                    </div>
                </div>
                 <!-- Overlay voor hover effect over de gehele ar-wp -->
                 <div class="hover-overlay">
                    <img src="jouw-foto-url.jpg" alt="">
                    <div class="hover-flex" style="display: flex; flex-direction: column;">
                        <h1 style="color: #fff; font-size: 42px;">Moon's Huidbalsem</h1>
                        <a href="/portfolio/moons-huidbalsem" class="boes-button-lila" style="text-align: center; max-width: 75%; margin: 0 auto;">Bekijk Project</a>
                    </div>
                </div>
            </div>
</section>

<section class="p-afgelopen-reizen" style="height: auto;">
            <div class="ar-wp">
                <div class="afgelopen-reizen-container">
                    <div class="ar-wrapper">
                        <div class="k-logo"></div>
                        <div class="ar-box-1">
                            <h1 class="mobile-p-h1">Katholieke Jongerendag</h1>
                            <p>Branding & Promotie</p>
                            <div class="ar-blocks">
                                <div class="ar-block1"></div>
                                <div class="ar-block2"></div>
                                <div class="ar-block3"></div>
                                <div class="ar-block4"></div>
                            </div>

                            <div class="ar-images">
                                <div class="ar-img1"></div>
                                <div class="ar-img2"></div>
                            </div>
                        </div>
                        <div class="ar-box-2"></div>
                        <div class="mobile-cta-box" style="margin: 25px auto; margin-bottom: 50px;">
                            <a href="/portfolio/katholieke-jongerendag" class="boes-button-blue">Bekijk project</a>
                        </div>
                    </div>
                </div>
                  <!-- Overlay voor hover effect over de gehele ar-wp -->
        <div class="hover-overlay">
            <div class="hover-flex" style="display: flex; flex-direction: column;">
                <h1 style="color: #fff; font-size: 42px; text-align: center;">Katholieke <br> Jongerendag</h1>
                <a href="/portfolio/katholieke-jongerendag" class="boes-button-lila" style="text-align: center; max-width: 75%; margin: 0 auto;">Bekijk Project</a>
            </div>
        </div>
            </div>
    </section>

<section class="p-afgelopen-reizen">
<div class="foda-wp">
                <div class="afgelopen-reizen-container">
                    <div class="ar-wrapper">
                        <div class="foda-sticker"></div>
                        <div class="ar-box-1">
                            <h1 class="mobile-p-h1" style="color: #153E26; font-family: Libre Baskerville, serif; font-weight: normal; font-style: normal; font-size: 58px; ">Föda Silva <br> Voedselbos </h1>
                            <p style="color: #153E26; font-family: Libre Baskerville, serif; font-weight: normal; font-style: normal; font-size: 27px;">Branding & promotie</p>
                            <div class="ar-blocks">
                                <div class="ar-block1" style="background-color: #153E26"></div>
                                <div class="ar-block2" style="background-color: #5D8D3A"></div>
                                <div class="ar-block3" style="background-color: #CC5C11"></div>
                                <div class="ar-block4" style="background-color: #E3D2A3"></div>
                            </div>

                            <div class="ar-images">
                                <div class="foda-1"></div>
                                <div class="foda-2"></div>
                            </div>
                        </div>
                        <div class="foda-box-2"></div>
                        <div class="mobile-cta-box" style="margin: 25px auto; margin-bottom: 50px; text-align: center;">
                            <a href="/portfolio/foda-silva" class="boes-button-blue">Bekijk project</a>
                        </div>
                    </div>
                </div>
                  <!-- Overlay voor hover effect over de gehele ar-wp -->
        <div class="hover-overlay">
            <div class="hover-flex" style="display: flex; flex-direction: column; text-align:center;">
                <h1 style="color: #fff; font-size: 42px;">Föda Silva</h1>
                <a href="/portfolio/foda-silva" class="boes-button-lila" style="text-align: center; max-width: 75%; margin: 0 auto; min-width: 180px;">Bekijk Project</a>
            </div>
        </div>
            </div>
</section>

<section class="p-afgelopen-reizen">
<div class="secuur-wp">
                <div class="afgelopen-reizen-container">
                    <div class="ar-wrapper">
                        <div class="secuur-sticker"></div>
                        <div class="ar-box-1">
                            <h1 class="mobile-p-h1" style="color: #153E26; font-family: source-serif-pro, serif; font-weight: normal; font-style: normal; font-size: 80px; margin: 0px;">Secuur</h1>
                            <span style="color: #153E26; font-family: source-serif-pro, serif;  font-size: 40px; margin-top: -30px;">Schade Expert</span> 
                            <p style="color: #153E26; font-family: source-serif-pro, serif; font-weight: normal; font-style: normal; font-size: 27px;">Branding, stationery & website</p>
                            <div class="ar-blocks">
                                <div class="ar-block1" style="background-color: #002024"></div>
                                <div class="ar-block2" style="background-color: #5897CC"></div>
                                <div class="ar-block3" style="background-color: #D5ECF2"></div>
                                <div class="ar-block4" style="background-color: #FED07A"></div>
                            </div>

                            <div class="ar-images">
                                <div class="secuur-1"></div>
                                <div class="secuur-2"></div>
                            </div>
                        </div>
                        <div class="secuur-box-2"></div>
                        <div class="mobile-cta-box" style="margin: 25px auto; margin-bottom: 50px;">
                            <a href="/portfolio/secuur-schade-expert" class="boes-button-blue">Bekijk project</a>
                        </div>
                    </div>
                </div>
                   <!-- Overlay voor hover effect over de gehele ar-wp -->
        <div class="hover-overlay">
            <div class="hover-flex" style="display: flex; flex-direction: column;">
                <h1 style="color: #fff; font-size: 42px; text-align:center;">Secuur <br>Schade Expert</h1>
                <a href="/portfolio/secuur-schade-expert" class="boes-button-lila" style="text-align: center; max-width: 75%; margin: 0 auto;">Bekijk Project</a>
            </div>
        </div>
            </div>
</section>

<section class="p-afgelopen-reizen">
<div class="emma-wp">
                <div class="afgelopen-reizen-container">
                    <div class="ar-wrapper">
                        <div class="emma-sticker"></div>
                        <div class="ar-box-1">
                            <h1 class="mobile-p-h1" style="color: #000000; font-family: Gasoek One, serif; font-weight: normal; font-style: normal; font-size: 80px; margin: 0px; line-height: 0.9;">Emma <br> Dorren</h1>
                            <span style="color: #000000; font-family: Gasoek One, serif;  font-size: 40px; margin-top: -30px;">animaties</span> 
                            <p style="color: #000000; font-family: Nunito Sans, serif; font-weight: normal; font-style: normal; font-size: 27px;">branding & sociale media</p>
                            <div class="ar-blocks">
                                <div class="ar-block1" style="background-color: #F74424"></div>
                                <div class="ar-block2" style="background-color: #FABD3A"></div>
                                <div class="ar-block3" style="background-color: #C9EE22"></div>
                                <div class="ar-block4" style="background-color: #FFE0D5"></div>
                            </div>

                            <div class="ar-images">
                                <div class="emma-1"></div>
                                <div class="emma-2"></div>
                            </div>
                        </div>
                        <div class="emma-box-2"></div>
                        <div class="mobile-cta-box" style="margin: 25px auto; margin-bottom: 50px;">
                            <a href="/portfolio/emma-dorren" class="boes-button-blue">Bekijk project</a>
                        </div>
                    </div>
                </div>
                   <!-- Overlay voor hover effect over de gehele ar-wp -->
        <div class="hover-overlay">
            <div class="hover-flex" style="display: flex; flex-direction: column;">
                <h1 style="color: #fff; font-size: 42px;">Emma Dorren</h1>
                <a href="/portfolio/emma-dorren" class="boes-button-lila" style="text-align: center; max-width: 75%; margin: 0 auto;">Bekijk Project</a>
            </div>
        </div>
            </div>
</section>

    <!-- Knoppen om projecten te tonen -->
<div class="button-container">
    <button class="p-boes-button-blue" onclick="showProject(0)">1</button>
    <button class="p-boes-button-blue" onclick="showProject(1)">2</button>
    <button class="p-boes-button-blue" onclick="showProject(2)">3</button>
    <button class="p-boes-button-blue" onclick="showProject(3)">4</button>
    <button class="p-boes-button-blue" onclick="showProject(4)">5</button>
</div>
</section>


<section class="p-laat-je-adviseren" style="align-content: center;">
<div class="laat-je-adviseren" style="background-image: none; background-color: #fff; margin-bottom: 0px;">

<div class="lja-box-1" style="color: #525252">
    <h1 class="bbv2">Laat je 
    adviseren!</h1>
    <p>Je hoeft je reis niet zelf uit te 
stippellen... Daar zijn wij voor!
</p>
</div>

<div class="lja-box-2">
    <h1 style="color: #006EB3; font-family: 'BlushesBold';">Nina Boes</h1>
    <div class="jla-tel-box">
        <div class="tel-icon"></div>
        <a id="lja-tel" href="tel:+31629799993" style="font-family:'blushes';">+31  6 297 999 93</a>
    </div>
    <div class="lja-contact-box">
        <div class="p-lja-icon"></div>
        <a href="mailt0:info@boesbranding.com" style="color: #525252;">info@boesbranding.com</a>
    </div>
</div>

<div class="nina-round"></div>
</section>

<!-- JavaScript voor functionaliteit -->
<script>
    // Functie om een specifiek project te tonen en de knop actief te maken
    function showProject(index) {
        // Alle projectsecties verbergen
        const projects = document.querySelectorAll('.p-afgelopen-reizen');
        projects.forEach(project => project.classList.remove('active'));

        // Geselecteerde projectsectie tonen
        if (projects[index]) {
            projects[index].classList.add('active');
        }

        // Alle knoppen resetten naar 50% opacity en de active klasse verwijderen
        const buttons = document.querySelectorAll('.p-boes-button-blue');
        buttons.forEach(button => {
            button.classList.remove('active');
            button.style.opacity = '0.33'; // Zet opacity van niet-actieve knoppen op 50%
        });

        // Voeg de 'active' klasse toe aan de geselecteerde knop en zet opacity op 100%
        if (buttons[index]) {
            buttons[index].classList.add('active');
            buttons[index].style.opacity = '1'; // Zet opacity van actieve knop op 100%
        }
    }

    // Wanneer de pagina geladen wordt, laat het eerste project zien en markeer de eerste knop als actief
    window.onload = function() {
        showProject(0); // Toon het eerste project en maak de eerste knop actief
    }
</script>



<?php get_footer(); // Laadt footer.php ?>