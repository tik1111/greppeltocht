import 'package:flutter/material.dart';
import 'package:greppeltocht/widgets/bottomNavigationBar.dart';

class HomeScreen extends StatelessWidget {
  const HomeScreen({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Theme.of(context).colorScheme.inversePrimary,
        title: const Text("Test bar"),
      ),
      bottomNavigationBar:
          const DefaultBottomNavBar(selectedIndex: 0, onItemSelected: 1),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            const Text(
              'Push counters:',
            ),
            Text(
              "Counter 1",
              style: Theme.of(context).textTheme.headlineMedium,
            ),
          ],
        ),
      ),
    );
  }
}
