using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Biblioteca
{
    public partial class Form1 : Form
    {
        private SqlConnection connection;

        public Form1()
        {
            InitializeComponent();

            string connectionString = "Server=LAB6-11;Database=AulaEngSoftI__04_05;Trusted_Connection=True;";

            connection = new SqlConnection(connectionString);
        }

        private void BtnCadastrar_Click(object sender, EventArgs e)
        {
            using (connection)
            {
                connection.Open();

                using (var command = new SqlCommand())
                {
                    command.Connection = connection;
                    command.CommandType = System.Data.CommandType.Text;

                    command.CommandText = $"INSERT INTO tb_livros VALUES ('{txtAutor.Text}', '{txtTitulo.Text}', {txtAno.Text})";

                    SqlDataReader reader = command.ExecuteReader();
                    reader.Close();
                }

                connection.Close();
            }

            
        }
    }
}
