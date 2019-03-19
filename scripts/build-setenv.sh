#!/bin/sh
LDFLAGS="-L/Applications/MAMP/htdocs/jgryn-network-test/common/lib $LDFLAGS"
export LDFLAGS
CFLAGS="-I/Applications/MAMP/htdocs/jgryn-network-test/common/include/ImageMagick -I/Applications/MAMP/htdocs/jgryn-network-test/common/include $CFLAGS"
export CFLAGS
CXXFLAGS="-I/Applications/MAMP/htdocs/jgryn-network-test/common/include $CXXFLAGS"
export CXXFLAGS
		    
PKG_CONFIG_PATH="/Applications/MAMP/htdocs/jgryn-network-test/common/lib/pkgconfig"
export PKG_CONFIG_PATH
