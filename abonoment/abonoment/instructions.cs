using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace smidigProsjekt
{
    class Instructions
    {
        public static void Commands()
        {
            Console.Write("\nskriv inn en av komandoene under, så trykk 'enter'\n" +
                "oppdater - oppdaterer abonementer og bestiller de som ikke er bestilt\n" +
                "utdatert - skriver ut alle de utdaterte radene i tabellen abonnement\n" +
                "add      - legger til en random entitet i tabellen abonnement\n" +
                "hjelp    - skriver instruksjonene på nytt her\n" +
                "clear    - rengjør consollen for skrift\n" +
                "avslutt  - avslutter programmet\n");
        }
    }
}
