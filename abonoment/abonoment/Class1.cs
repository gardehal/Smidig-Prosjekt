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
            String connectionString = "Server=localhost;Database=abonoment;Uid=root;pwd=mysqlrix3996;";
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
                cmd.CommandText = "SELECT kunde_id, liste_id, bestiling_id, leverings_dato, intervall FROM abonnement WHERE leverings_dato < '" + 
                    thisDay + "';" ;
                MySqlDataAdapter adap = new MySqlDataAdapter(cmd);
                DataSet ds = new DataSet();
                adap.Fill(ds);
                foreach (DataTable table in ds.Tables)
                {
                    foreach (DataRow row in table.Rows)
                    {
                        DateTime forigeBestilling = (DateTime) row["leverings_dato"];
                        Console.WriteLine("før add: " + forigeBestilling);
                        int intervall =(int) row["intervall"];
                        DateTime nesteBestilling = forigeBestilling.AddDays(intervall*7);
                        // read column and item
                        Console.WriteLine("etter add: " + nesteBestilling + "\n");
                    }
                }

                bool finished = false;
               // while (!finished)
                {
                    
                }

                cmd.ExecuteNonQuery();

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
