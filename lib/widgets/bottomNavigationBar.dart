// ignore: file_names
import 'package:flutter/material.dart';

class DefaultBottomNavBar extends StatefulWidget {
  final int selectedIndex;
  final int onItemSelected;

  const DefaultBottomNavBar({
    Key? key,
    required this.selectedIndex,
    required this.onItemSelected,
  }) : super(key: key);

  @override
  // ignore: library_private_types_in_public_api
  _DefaultBottomNavBarState createState() => _DefaultBottomNavBarState();
}

class _DefaultBottomNavBarState extends State<DefaultBottomNavBar> {
  @override
  Widget build(BuildContext context) {
    return BottomNavigationBar(
      items: const <BottomNavigationBarItem>[
        BottomNavigationBarItem(
          icon: Icon(Icons.assignment_ind),
          label: 'Overzicht',
        ),
        BottomNavigationBarItem(
          icon: Icon(Icons.map),
          label: 'Kaart',
        ),
      ],
      currentIndex: widget.selectedIndex,
      selectedItemColor: Colors.amber[800],
      onTap: (int) {
        widget.onItemSelected;
      },
    );
  }
}
