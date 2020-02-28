#!/bin/sh

rm ./*.zip

cd pluginA
zip -r ../pluginA.zip .
cd ..

cd pluginB
zip -r ../pluginB.zip .
cd  ..