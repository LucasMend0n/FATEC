import 'package:flutter/material.dart';

void main() => runApp(const MyApp());

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Turismo em Ribeirão Pires',
      theme: ThemeData(
        brightness: Brightness.dark, 
        primarySwatch: Colors.blueGrey,
        scaffoldBackgroundColor: const Color(0xFF121212), 
        cardColor: const Color(0xFF1E1E1E),
      ),
      home: Scaffold(
        appBar: AppBar(
          title: const Text('Pontos Turísticos de Ribeirão Pires'),
        ),
        body: ListView(
          children: [
          
            Card(
              margin: const EdgeInsets.all(15),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Semantics(
                    label:
                        'Imagem do Mirante Santo Antônio, um ponto de observação popular em Ribeirão Pires.',
                    child: Image.network(
                      'https://ribeiraopires.sp.gov.br/wp-content/uploads/2022/08/DSCF8143-1024x683.jpg',
                      fit: BoxFit.cover,
                    ),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(8.0),
                    child: Text(
                      'Mirante Santo Antônio',
                      style: TextStyle(
                        fontSize: 20 * MediaQuery.textScaleFactorOf(context),
                        fontWeight: FontWeight.bold,
                        color: Colors.white,
                      ),
                    ),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(8.0),
                    child: Text(
                      'O Mirante Santo Antônio oferece uma vista panorâmica da cidade e é um dos principais pontos turísticos de Ribeirão Pires.',
                      style: TextStyle(
                        fontSize: 16 * MediaQuery.textScaleFactorOf(context),
                        color: Colors.white70, 
                      ),
                    ),
                  ),
                ],
              ),
            ),
            Card(
              margin: const EdgeInsets.all(15),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Semantics(
                    label:
                        'Imagem do Morro São José, um local histórico e popular para trilhas em Ribeirão Pires.',
                    child: Image.network(
                      'https://ribeiraopires.sp.gov.br/wp-content/uploads/2024/03/WhatsApp-Image-2024-03-19-at-13.12.43-scaled.jpeg',
                      fit: BoxFit.cover,
                    ),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(8.0),
                    child: Text(
                      'Morro São José',
                      style: TextStyle(
                        fontSize: 20 * MediaQuery.textScaleFactorOf(context),
                        fontWeight: FontWeight.bold,
                        color: Colors.white,
                      ),
                    ),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(8.0),
                    child: Text(
                      'O Morro São José é um ponto turístico de Ribeirão Pires, conhecido por suas trilhas e vistas panorâmicas da cidade.',
                      style: TextStyle(
                        fontSize: 16 * MediaQuery.textScaleFactorOf(context),
                        color: Colors.white70,
                      ),
                    ),
                  ),
                ],
              ),
            ), 
            Card(
              margin: const EdgeInsets.all(15),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Semantics(
                    label:
                        'Imagem da Igreja Matriz de São José, uma igreja histórica no centro da cidade.',
                    child: Image.network(
                      'https://diocesesa.org.br/wp-content/uploads/2024/06/paroquia-sao-jose-ribpires.webp',
                      fit: BoxFit.cover,
                    ),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(8.0),
                    child: Text(
                      'Igreja Matriz de São José',
                      style: TextStyle(
                        fontSize: 20 * MediaQuery.textScaleFactorOf(context),
                        fontWeight: FontWeight.bold,
                        color: Colors.white,
                      ),
                    ),
                  ),
                  Padding(
                    padding: const EdgeInsets.all(8.0),
                    child: Text(
                      'A Igreja Matriz de São José é um marco religioso e cultural de Ribeirão Pires, com uma arquitetura imponente.',
                      style: TextStyle(
                        fontSize: 16 * MediaQuery.textScaleFactorOf(context),
                        color: Colors.white70,
                      ),
                    ),
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
