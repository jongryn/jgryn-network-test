#!/bin/sh
LDFLAGS="-L/Applications/MAMP/htdocs/bitnami-jgryn-network/common/lib $LDFLAGS"
export LDFLAGS
CFLAGS="-I/Applications/MAMP/htdocs/bitnami-jgryn-network/common/include/ImageMagick -I/Applications/MAMP/htdocs/bitnami-jgryn-network/common/include $CFLAGS"
export CFLAGS
CXXFLAGS="-I/Applications/MAMP/htdocs/bitnami-jgryn-network/common/include $CXXFLAGS"
export CXXFLAGS
		    
PKG_CONFIG_PATH="/Applications/MAMP/htdocs/bitnami-jgryn-network/common/lib/pkgconfig"
export PKG_CONFIG_PATH
