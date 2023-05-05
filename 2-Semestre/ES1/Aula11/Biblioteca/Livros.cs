using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Biblioteca
{
    class Livros
    {
        public int CodLivro { get; set; }
        public string Autor { get; set; }
        public string Titulo { get; set; }
        public int Ano { get; set; }

        public Livros()
        {
        }

        public Livros(string autor, string titulo, int ano)
        {
            Autor = autor;
            Titulo = titulo;
            Ano = ano;
        }
    }
}
