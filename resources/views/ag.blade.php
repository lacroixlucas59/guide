<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Audio guide ─ Guide touristique d'Espagne</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="{{ asset('css/design.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        <header>Guide touristique d'Espagne</header>
        <section id="presentation" style="background-image:url('../img/seville.jpg');">
            
            <div class="surcouche"></div>
            <div class="margium">
                <div class="espacium" style="margin-bottom: 0px;">
                        <div class="vide"></div>
                        <h1 class="c">Audioguide {{$id}}</h1>
                        <div class="vide"></div>
                </div>
            </div> 
        </section>
        <div class="margium-s">
            <p>
                Paphius quin etiam et Cornelius senatores, ambo venenorum artibus pravis se polluisse confessi, eodem pronuntiante Maximino sunt interfecti. pari sorte etiam procurator monetae extinctus est. Sericum enim et Asbolium supra dictos, quoniam cum hortaretur passim nominare, quos vellent, adiecta religione firmarat, nullum igni vel ferro se puniri iussurum, plumbi validis ictibus interemit. et post hoe flammis Campensem aruspicem dedit, in negotio eius nullo sacramento constrictus.

Nemo quaeso miretur, si post exsudatos labores itinerum longos congestosque adfatim commeatus fiducia vestri ductante barbaricos pagos adventans velut mutato repente consilio ad placidiora deverti.

Excitavit hic ardor milites per municipia plurima, quae isdem conterminant, dispositos et castella, sed quisque serpentes latius pro viribus repellere moliens, nunc globis confertos, aliquotiens et dispersos multitudine superabatur ingenti, quae nata et educata inter editos recurvosque ambitus montium eos ut loca plana persultat et mollia, missilibus obvios eminus lacessens et ululatu truci perterrens.
            </p>
        </div> 
    </body>
</html>
