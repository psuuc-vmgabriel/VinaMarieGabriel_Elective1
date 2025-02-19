
import 'package:flutter/material.dart';

void main(){
  runApp(ass3());
}

class ass3 extends StatelessWidget {
  const ass3({super.key});
  
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        body: SafeArea(
          child: Container(
            child: Column(
              
              mainAxisSize: MainAxisSize.max,
              mainAxisAlignment: MainAxisAlignment.spaceBetween,
              children: [
              Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                children: [
                  Container(
                    width: 150,
                    height: 150,
                    color: Colors.blue,
                  ),
                  Container(
                    width: 150,
                    height: 150,
                    color: Colors.red,
                  ),
                ],
              ),
              Container(
                width: 150,
                height: 150,
                color: Colors.black,
              ),
                          Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                children: [
                  Container(
                    width: 150,
                    height: 150,
                    color: Colors.yellow,
                  ),
                  Container(
                    width: 150,
                    height: 150,
                    color: Colors.brown,
                  ),
                ],
              ),
            ],),
          ),
        ),
      ),
    );
  }
}