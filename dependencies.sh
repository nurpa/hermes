#!/bin/bash

if [ ! -d "pdf" ] || [ ! -d "lang" ] || [ ! -d "js" ]; then
  echo "ERROR: not executed from Hermes root directory"
  exit
fi

# vars

if [ "$(uname -m)" == "x86_64" ]; then
  BIN="64"
  ARCH="amd64"
else
  BIN="32"
  ARCH="i386"
fi

# phpwkhtmltopdf

echo "phpwkhtmltopdf: downloading"
wget -q "https://github.com/mikehaertl/phpwkhtmltopdf/tarball/master"

if [ "$?" = 0 ]; then
  echo "phpwkhtmltopdf: done"

  tar -xf master

  if [ "$?" = 0 ]; then
    mv mikehaertl-*/WkHtmlToPdf.php pdf/ && rm -fr master mikehaertl-*/
  else
    echo "ERROR extracting phpwkhtmltopdf"
  fi
else
  echo "ERROR downloading phpwkhtmltopdf"
fi

# wkhtmltopdf

echo "wkhtmltopdf ($BIN bit): downloading"
wget -q "https://wkhtmltopdf.googlecode.com/files/wkhtmltopdf-0.11.0_rc1-static-$ARCH.tar.bz2"

if [ "$?" = 0 ]; then
  echo "wkhtmltopdf ($BIN bit): done"

  tar -xjf *.tar.bz2

  if [ "$?" = 0 ]; then
    rm -f wkhtmltopdf-*.tar.bz2 && chmod +x wkhtmltopdf-* && mv wkhtmltopdf-* pdf/
  else
    echo "ERROR extracting wkhtmltopdf ($BIN bit)"
  fi
else
  echo "ERROR downloading wkhtmltopdf ($BIN bit)"
fi