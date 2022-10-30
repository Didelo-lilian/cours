#!/bin/bash
set -e


DirO2switch="/home/pvdk8469/public_html/lilian/data/cours"
ServerO2switch="pvdk8469@109.234.164.253"

DirNiHost="/home/didelofr/public_html/lilian-data/cours"
ServerNiHost="didelofr@didelo.fr"

echo "🗑🚀 Synchronize all files"

rsync -avzhe ssh --progress --delete --exclude ".git" --exclude "deploy.sh" --exclude ".github" "./" "$ServerO2switch:$DirO2switch/"
echo "🎉 Project deployed on $ServerO2switch:$DDirO2switch"

rsync -avzhe ssh --progress --delete --exclude ".git" --exclude "deploy.sh" --exclude ".github" "./" "$ServerNiHost:$DirNiHost/"
echo "🎉 Project deployed on $ServerNiHost:$DirNiHost"
