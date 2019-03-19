#!/bin/sh
echo $PATH | egrep "/Applications/MAMP/htdocs/jgryn-network-test/common" > /dev/null
if [ $? -ne 0 ] ; then
PATH="/Applications/MAMP/htdocs/jgryn-network-test/apps/wordpress/bin:/Applications/MAMP/htdocs/jgryn-network-test/varnish/bin:/Applications/MAMP/htdocs/jgryn-network-test/sqlite/bin:/Applications/MAMP/htdocs/jgryn-network-test/php/bin:/Applications/MAMP/htdocs/jgryn-network-test/mysql/bin:/Applications/MAMP/htdocs/jgryn-network-test/apache2/bin:/Applications/MAMP/htdocs/jgryn-network-test/common/bin:$PATH"
export PATH
fi
echo $DYLD_FALLBACK_LIBRARY_PATH | egrep "/Applications/MAMP/htdocs/jgryn-network-test/common" > /dev/null
if [ $? -ne 0 ] ; then
DYLD_FALLBACK_LIBRARY_PATH="/Applications/MAMP/htdocs/jgryn-network-test/varnish/lib:/Applications/MAMP/htdocs/jgryn-network-test/varnish/lib/varnish:/Applications/MAMP/htdocs/jgryn-network-test/varnish/lib/varnish/vmods:/Applications/MAMP/htdocs/jgryn-network-test/sqlite/lib:/Applications/MAMP/htdocs/jgryn-network-test/mysql/lib:/Applications/MAMP/htdocs/jgryn-network-test/apache2/lib:/Applications/MAMP/htdocs/jgryn-network-test/common/lib:/usr/local/lib:/lib:/usr/lib${DYLD_FALLBACK_LIBRARY_PATH:+:$DYLD_FALLBACK_LIBRARY_PATH}"
export DYLD_FALLBACK_LIBRARY_PATH
fi

TERMINFO=/Applications/MAMP/htdocs/jgryn-network-test/common/share/terminfo
export TERMINFO
##### VARNISH ENV #####
		
      ##### SQLITE ENV #####
			
SASL_CONF_PATH=/Applications/MAMP/htdocs/jgryn-network-test/common/etc
export SASL_CONF_PATH
SASL_PATH=/Applications/MAMP/htdocs/jgryn-network-test/common/lib/sasl2 
export SASL_PATH
LDAPCONF=/Applications/MAMP/htdocs/jgryn-network-test/common/etc/openldap/ldap.conf
export LDAPCONF
##### IMAGEMAGICK ENV #####
MAGICK_HOME="/Applications/MAMP/htdocs/jgryn-network-test/common"
export MAGICK_HOME

MAGICK_CONFIGURE_PATH="/Applications/MAMP/htdocs/jgryn-network-test/common/lib/ImageMagick-6.9.8/config-Q16:/Applications/MAMP/htdocs/jgryn-network-test/common/"
export MAGICK_CONFIGURE_PATH

MAGICK_CODER_MODULE_PATH="/Applications/MAMP/htdocs/jgryn-network-test/common/lib/ImageMagick-6.9.8/modules-Q16/coders"
export MAGICK_CODER_MODULE_PATH

##### FONTCONFIG ENV #####
FONTCONFIG_PATH="/Applications/MAMP/htdocs/jgryn-network-test/common/etc/fonts"
export FONTCONFIG_PATH
##### PHP ENV #####
PHP_PATH=/Applications/MAMP/htdocs/jgryn-network-test/php/bin/php
COMPOSER_HOME=/Applications/MAMP/htdocs/jgryn-network-test/php/composer
export PHP_PATH
export COMPOSER_HOME
##### MYSQL ENV #####

##### APACHE ENV #####

##### CURL ENV #####
CURL_CA_BUNDLE=/Applications/MAMP/htdocs/jgryn-network-test/common/openssl/certs/curl-ca-bundle.crt
export CURL_CA_BUNDLE
##### SSL ENV #####
SSL_CERT_FILE=/Applications/MAMP/htdocs/jgryn-network-test/common/openssl/certs/curl-ca-bundle.crt
export SSL_CERT_FILE
OPENSSL_CONF=/Applications/MAMP/htdocs/jgryn-network-test/common/openssl/openssl.cnf
export OPENSSL_CONF
OPENSSL_ENGINES=/Applications/MAMP/htdocs/jgryn-network-test/common/lib/engines
export OPENSSL_ENGINES


. /Applications/MAMP/htdocs/jgryn-network-test/scripts/build-setenv.sh
