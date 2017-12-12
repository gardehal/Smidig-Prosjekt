using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

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
            String connectionString = "Server=[localhost:3306];Database=[linrob16_kolonial];Trusted_Connection=true";
            using (SqlConnection conn = new SqlConnection(connectionString))
            {
                // Create the connectionString
                // Trusted_Connection is used to denote the connection uses Windows Authentication
                conn.Open();
                if(conn.State == ConnectionState.Open)
                {
                    Console.WriteLine("hei");
                }
                Console.WriteLine("bai");
                conn.Close();
            }
        }
    }
}
