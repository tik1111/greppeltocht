import 'package:flutter/material.dart';
import 'package:go_router/go_router.dart';
import 'package:greppeltocht/screen/homeScreen.dart';

class AppPage {
  static const String home = '/';
  static const String details = '/details';
}

final goRouter = GoRouter(
  routes: [
    GoRoute(
      path: AppPage.home,
      builder: (BuildContext context, GoRouterState state) => HomeScreen(),
    ),
    GoRoute(
      path: AppPage.details,
      builder: (BuildContext context, GoRouterState state) => HomeScreen(),
    ),
  ],
);
