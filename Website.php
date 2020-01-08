<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfollio</title>
        <link rel="stylesheet" href="Style.css">
   
    </head>
    <body id="body-web">
        <header id="Head-web"> <!-- Hearder informere site's katogori-->
              <h1> Website</h1> 
        </header>
        
<section id="drop-down-menu"> 
        <?php include 'drop-down-menu.inc' ?> <!-- Drop down menu php -->
</section> 
        
    <!--HTML Start-->
        <section id="HTML-h2">  
            <h2>HTML</h2><!-- Serverens historie sektionen -->
        </section>  
        
        <section id="HTML-p1">
                <p>Hypertext markup language er det standarte sprog og skrift for websites. HTML er en samling af elementor som bruges i forskellige dele af dokumentet så som: header, footer, heading og body. Et HTMl element består af star- og end tag, attribute, value, content.</p>
        </section>
            
                    <ul>
                    <section id="S-E">
                        <li>Start- og end tag: ved begge anvendes (< >). Hvor end tag også anvender (/). Tag’et gives et navn for dens funktion og genkendelighed.</li>
                    </section>
                    
                    <section id="Attri">
                        <li>Attribute: er ekstra information om hvordan konteksten af elementet skal behandles. </li>
                    </section>
                    
                    <section id="Value">
                        <li>Value: udvides fra attribute’n men sperers af (=) er som navnet siger værdigen. </li>
                    </section>
                    
                    <section id="Cont">
                        <li>Content: er det der bliver læsligt på website’t og fortæller om indholdet.</li>
                    </section>
                    </ul>
        
            <section id="HTML-img">
                    <img src="Billeder/HTML.jpeg" width="600px" height="auto">
            </section>
        
        
        <section id="HTML-p2">
                <p>Alle HTML dokumenter starter med <!DOCTYPE html> for at specificer at det er en HTML fil. For at få et HTML Document til at virke SKAL det starte og slutte med et HTML tag ( <html> </html>). Hvor efter man kan anvende HEAD og BODY tags. HEAD indeholder informationer som meta data, website titel og stylesheet link. Alt der ses på website’t billeder, tekst, video, osv. Angives i BODY.</p>
        </section>
        
        
        <section id="seman">
                <p>Semantiske elementer fortæller om indholdet f.eks.</p>
                    <ul>
                        <li>HEADER</li>
                    
                        <li>TABLE</li>
                    
                        <li>IMG</li>
                    
                        <li>FOOTER</li>
                    </ul>
        </section>
        
        <section id="non-seman">
                <p>Non-semantiske elementer fortæller ikke om indholdet f.eks.</p>
        
                    <ul>
                        <li>DIV </li>
                     
                        <li>SPAN </li>
                    </ul>
        
                        <a href="https://www.w3schools.com/html/html5_semantic_elements.asp">(Kilde: Semantic Elements, w3school)</a> <!-- Kilde information mere kan fides på kilde site't-->
        </section>
      <!--HTML Slut-->  
       
    
       <!--CSS Start--> 
        <section id="CSS-h2">
            <h2>CSS</h2>
        </section>
        
        <section id="CSS-p">
                <p>Cascading Style Sheets beskriver hvordan HTML elementerne skal opstilles, se ud, altså styles. Style sheets anvender følgende:</p>
        </section>
        
            <section id="CSS-ul">
                    <ul>
                        <li>Selector: er den tag, class eller id fra HTML filen bliver bearbejdede. </li>
                    
                        <li>Property: er egenskaben der bliver opført tag/class/id. Med style sheet’et. Husk dog semikolon mellem property og value. </li>
                    
                        <li>Value: er som navnet siger, værdigen af propety, som både kan være farver, størrelser m.m.</li>
                    
                        <li>Declaration: Under en selector kan der være flere property og dens value. De vil tilhøre selector så længe de er inden for dens start declaration ({) og end declaration (}).</li>
                    </ul>
            </section>
        
                <section id="CSS-img">
                            <img src="Billeder/CSS.jpeg" width="600px" height="auto">
                </section>
        <!--CSS Slut-->
        
        <!--Grid Start-->
        <section id="Grid-h2">
            <h2>Grid</h2>
        </section>
        
        <section id="Grid-p">
                <p>Grid anvendes til at designet at websitet layout ved brug af properties så som FLOAT og CLEAR. Grib giver mulighede for at arbejdede på ROW og COLUMNS samtidig, mødesat FLEXBOX hvor man enden arbejder ROW eller COLIMS. </p>
        </section>
        <!--Grid <Slut-->
        
        
        <!--Responsiv Start-->
         <section id="Renspon-h2">
            <h2>Responsiv</h2>
        </section>
        
         <section id="Renspon-p">
                <p> Med responsiv layout tilpasses det til at passe skærmbredden både i HTML og CSS. For anvendes at responsiv layout starter koden med (@medie), hvor efter informationer om hvilke skærmstørrelse den skal tilpasse. Der er dog andre layout designs:</p>
        </section>
        
        <section id="Renspon-ul">
                    <ul>
                        <li>Statisk: ændres ikke ved forskellige skærmstørrelser men beskære indholdet.</li>
                    
                        <li>Flydende: indholdet er oplyst i procenter om tilpasse skærmstørrelse</li>
                    
                        <li>Adaptiv: mellemtin mellem statisk og responsiv layout. For dette layout design som vil bruge MOBIL LAST. Koden igangsættes med @mediaqueries.</li>
                    </ul>
        
                <p>(Kilde: Niels Østergaard, responsive I praksis) </p> <!-- Kilde information mere kan fides på kilde site't-->
            </section>
            
            <section id="Mit-Renspon">
                <p>Dette er min første resoinsiv website<a href="http://emil9573.apache.eadania.dk/1semester/responsive-ovelse/Responsive%20ovelse%201.html">http://emil9573.apache.eadania.dk/1semester/responsive-ovelse/Responsive%20ovelse%201.html</a></p>
            </section>
         <!--Responsiv Slut-->
        
         <!--Versionsstyring Start-->
    <section id="Versions-h2">
            <h2>Versionsstyring</h2>
    </section>
        
        
        <section id="Versions-p">
                <p>Med versionsstyring vil gøre samarbejde være meget nemmer. Det giver mulighed for at arbejde på sektion af en Bracket file, hvor arbejde vil kunne ses på versionsprogram og derefter kan det merge’s med selve filen.</p>
        </section>
        
        <section id="Git-Img">
                    <img src="Billeder/Branch.png" width="600px" height="auto">
        </section>
        
                <section id="Branch">
                    <ul>
                        <li>Branch</li>
                    
                        <li>Commit</li>
                    
                        <li>Pull Request</li>
                    
                        <li>Merge</li>
                    </ul>
                </section>       
                    
                <section id="Version-kilde">
                        <a href="https://www.w3docs.com/learn-git/version-control-software.html">(Kilde: Version Control Software, w3docs) </a>
                </section>
        <!--Versionsstyring Slut-->
    
    </body>
</html>