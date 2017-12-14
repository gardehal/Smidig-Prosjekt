using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace abonoment
{
    using System.Data.SqlClient;
    using System.Data;
    class MainClass
    {
        static void Main()
        {
            // Create the connection to the resource!
            // This is the connection, that is established and
            // will be available throughout this block.
            Console.WriteLine("check");
            String connectionString = "Server=localhost;Database=abonoment;Uid=root;pwd=mysqlrix3996;Convert Zero Datetime=True";
            MySqlConnection conn = new MySqlConnection(connectionString);
            MySqlCommand cmd;
            Random rnd = new Random();

            conn.Open();

            if (conn.State == ConnectionState.Open)
            {
                Console.WriteLine("connection!");
                Console.ReadKey();
            }
            try
            {
                cmd = conn.CreateCommand();
                /* cmd.CommandText = "INSERT INTO abonnement(kunde_id,liste_id,bestiling_id,leverings_dato,leverings_tidspunkt,intervall)" +
                     "VALUES(@kunde,@liste,@bestilling,@dato,@tidspunkt,@intervall)";
                 cmd.Parameters.AddWithValue("@kunde", rnd.Next(1, 1000));
                 cmd.Parameters.AddWithValue("@liste", rnd.Next(1, 1000));
                 cmd.Parameters.AddWithValue("@bestilling", rnd.Next(1, 1000));
                 cmd.Parameters.AddWithValue("@dato", "1001-01-01");
                 cmd.Parameters.AddWithValue("@tidspunkt", "09-14");11
                 cmd.Parameters.AddWithValue("@intervall", rnd.Next(1, 9));*/

                //skal se gjennom de ordrene som er null eller senere en dagens dato, og endre leveringsdatoen til neste levering.
                DateTime thisDay = DateTime.Today;
                cmd.CommandText = "SELECT * FROM abonnement WHERE leverings_dato < '" + 
                    thisDay + "';" ;
                MySqlDataAdapter adap = new MySqlDataAdapter(cmd);
                DataSet ds = new DataSet();
                adap.Fill(ds);
                foreach (DataTable table in ds.Tables)
                {
                    // tar for seg hver rad som er hentet ut
                    foreach (DataRow row in table.Rows)
                    {
                        //lager ny command slik at ikke @leverings_dato allerede er defined fra før
                        MySqlCommand newCmd;
                        newCmd = conn.CreateCommand();
                        DateTime forigeBestilling = (DateTime) row["leverings_dato"];
                        //Console.WriteLine("før add: " + forigeBestilling);
                        int intervall =(int) row["intervall"];
                        DateTime nesteBestilling = forigeBestilling.AddDays(intervall*7);
                        //Console.WriteLine("etter add: " + nesteBestilling);
                        string dato = nesteBestilling.ToString("s"); //henter datoen ut til riktig format
                        dato = dato.Substring(0, 10); //tar bort tiden fra datetime uthentingen
                        //Console.WriteLine(dato + "\n");
                        //her tar man å setter in bestilling til datoen "nesteBestilling"
                        newCmd.CommandText = "UPDATE abonnement SET leverings_dato = @leverings_dato WHERE kunde_id =" +
                           row["kunde_id"] + " AND liste_id = " + row["liste_id"] + ";";
                       newCmd.Parameters.AddWithValue("@leverings_dato", dato);
                        newCmd.ExecuteNonQuery();
                    }
                }
            }
            catch (Exception)
            {
                throw;
            }
                Console.WriteLine("over");
                conn.Close();
                Console.ReadKey();
            
        }
    }
}
