import 'package:flutter/material.dart';

void main() => runApp(const MyApp());

class MyApp extends StatelessWidget {
  const MyApp({super.key});
  static const String _title = 'Trabalhando com animações';

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: _title,
      theme: ThemeData(
        brightness: Brightness.dark, 
        primarySwatch: Colors.blueGrey,
        scaffoldBackgroundColor: const Color(0xFF121212), 
        cardColor: const Color(0xFF1E1E1E), 
        inputDecorationTheme: InputDecorationTheme(
          filled: true,
          fillColor: const Color(0xFF1E1E1E),
          border: OutlineInputBorder(
            borderRadius:
                BorderRadius.circular(8), 
          ),
        ),
      ),
      home: const MyHomePage(),
    );
  }
}

class MyHomePage extends StatefulWidget {
  const MyHomePage({super.key});

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {
  final TextEditingController nome = TextEditingController();
  final TextEditingController senha = TextEditingController();
  bool tapped = false; 
  final Duration duration =
      const Duration(milliseconds: 300); 

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Trabalhando com animações'),
      ),
      body: Padding(
        padding: const EdgeInsets.all(15),
        child: Column(
          children: <Widget>[
            Padding(
              padding: const EdgeInsets.all(15),
              child: TextField(
                controller: nome,
                decoration: InputDecoration(
                  labelText: "Nome",
                  hintText: "Digite o nome completo",
                  border: OutlineInputBorder(
                    borderRadius: BorderRadius.circular(
                        tapped ? 30 : 8), 
                  ),
                ),
              ),
            ),
            AnimatedContainer(
              duration: duration,
              curve: Curves.easeInOut,
              padding: EdgeInsets.all(
                  tapped ? 120 : 80),
              child: SizedBox(
                width:
                    tapped ? 200 : double.infinity, 
                child: ElevatedButton(
                  onPressed: () {
                    setState(() {
                      tapped = !tapped;
                      nome.clear();
                      senha.clear();
                    });
                  },
                  style: ElevatedButton.styleFrom(
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(
                          tapped ? 30 : 8), 
                    ),
                    backgroundColor: Colors.blueGrey, 
                  ),
                  child: Text(
                    tapped ? 'Retangulizar' : 'Arredondar',
                    style: const TextStyle(color: Colors.white),
                  ),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
