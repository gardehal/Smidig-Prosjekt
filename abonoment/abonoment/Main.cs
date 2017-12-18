using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace smidigProsjekt
{
    class Start
    {
        static void Main()
        {
            Instructions.Commands();
            Console.Write("skriv inn en av komandoene under for å starte\n");
            String command;
            bool exit = false;
            while (!exit)
            {
                command = Console.ReadLine();
                switch (command)
                {
                    case "oppdater":
                        Abonnement.Oppdater();
                        break;
                    case "utdatert":
                        Abonnement.Utdatert();
                        break;
                    case "add":
                        Abonnement.Add();
                        break;
                    case "hjelp":
                        Instructions.Commands();
                        break;
                    case "clear":
                        Console.Clear();
                        Instructions.Commands();
                        break;
                    case "avslutt":
                        exit = true;
                        break;
                    default:
                        Console.WriteLine("feil: skriv ordrett et av valgene");
                        break;
                }
                Console.WriteLine("\nskriv neste komando");
            }
        }
    }
}
