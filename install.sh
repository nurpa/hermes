#!/bin/bash

if [ ! -d "pdf" ] || [ ! -d "lang" ] || [ ! -d "js" ]; then
  echo "hermes: install.sh must be executed from Hermes root directory"
  echo "hermes: Error is not recoverable: exiting now"
  exit
fi

# vars

if [ "$(uname -m)" = "x86_64" ]; then
  BIN="64"
  ARCH="amd64"
else
  BIN="32"
  ARCH="i386"
fi

# fetch dependencies

## phpwkhtmltopdf

if [ ! -f "pdf/WkHtmlToPdf.php" ]; then
  echo "hermes: downloading WkHtmlToPdf.php"

  wget -q "https://github.com/mikehaertl/phpwkhtmltopdf/tarball/master" \
  && tar -xf master -C "pdf/" --wildcards --strip-components=1 "mikehaertl-*/WkHtmlToPdf.php" \
  && rm -fr master mikehaertl-*/
else
  echo "hermes: WkHtmlToPdf.php already downloaded"
fi

## wkhtmltopdf

if [ ! -f "pdf/wkhtmltopdf-$ARCH" ]; then
  echo "hermes: downloading wkhtmltopdf-$ARCH"

  wget -q "https://wkhtmltopdf.googlecode.com/files/wkhtmltopdf-0.11.0_rc1-static-$ARCH.tar.bz2" \
  && tar -xjf wkhtmltopdf-*.tar.bz2 -C "pdf/" \
  && chmod +x pdf/wkhtmltopdf-* \
  && rm -f wkhtmltopdf-*.tar.bz2
else
  echo "hermes: wkhtmltopdf-$ARCH already downloaded"
fi

# edit config file

if [ "$BIN" = "64" ]; then
  echo "hermes: editing config file"

  sed -i -e "s/wkhtmltopdf-i386/wkhtmltopdf-amd64/g" config.php
fi