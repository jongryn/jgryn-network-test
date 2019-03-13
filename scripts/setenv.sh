#!/bin/sh
echo $PATH | egrep "/Applications/MAMP/htdocs/bitnami-jgryn-network/common" > /dev/null
if [ $? -ne 0 ] ; then
PATH="/Applications/MAMP/htdocs/bitnami-jgryn-network/apps/wordpress/bin:/Applications/MAMP/htdocs/bitnami-jgryn-network/varnish/bin:/Applications/MAMP/htdocs/bitnami-jgryn-network/sqlite/bin:/Applications/MAMP/htdocs/bitnami-jgryn-network/php/bin:/Applications/MAMP/htdocs/bitnami-jgryn-network/mysql/bin:/Applications/MAMP/htdocs/bitnami-jgryn-network/apache2/bin:/Applications/MAMP/htdocs/bitnami-jgryn-network/common/bin:$PATH"
export PATH
fi
echo $DYLD_FALLBACK_LIBRARY_PATH | egrep "/Applications/MAMP/htdocs/bitnami-jgryn-network/common" > /dev/null
if [ $? -ne 0 ] ; then
DYLD_FALLBACK_LIBRARY_PATH="/Applications/MAMP/htdocs/bitnami-jgryn-network/varnish/lib:/Applications/MAMP/htdocs/bitnami-jgryn-network/varnish/lib/varnish:/Applications/MAMP/htdocs/bitnami-jgryn-network/varnish/lib/varnish/vmods:/Applications/MAMP/htdocs/bitnami-jgryn-network/sqlite/lib:/Applications/MAMP/htdocs/bitnami-jgryn-network/mysql/lib:/Applications/MAMP/htdocs/bitnami-jgryn-network/apache2/lib:/Applications/MAMP/htdocs/bitnami-jgryn-network/common/lib:/usr/local/lib:/lib:/usr/lib${DYLD_FALLBACK_LIBRARY_PATH:+:$DYLD_FALLBACK_LIBRARY_PATH}"
export DYLD_FALLBACK_LIBRARY_PATH
fi

TERMINFO=/Applications/MAMP/htdocs/bitnami-jgryn-network/common/share/terminfo
export TERMINFO
##### VARNISH ENV #####
		
      ##### SQLITE ENV #####
			
SASL_CONF_PATH=/Applications/MAMP/htdocs/bitnami-jgryn-network/common/etc
export SASL_CONF_PATH
SASL_PATH=/Applications/MAMP/htdocs/bitnami-jgryn-network/common/lib/sasl2 
export SASL_PATH
LDAPCONF=/Applications/MAMP/htdocs/bitnami-jgryn-network/common/etc/openldap/ldap.conf
export LDAPCONF
##### IMAGEMAGICK ENV #####
MAGICK_HOME="/Applications/MAMP/htdocs/bitnami-jgryn-network/common"
export MAGICK_HOME

MAGICK_CONFIGURE_PATH="/Applications/MAMP/htdocs/bitnami-jgryn-network/common/lib/ImageMagick-6.9.8/config-Q16:/Applications/MAMP/htdocs/bitnami-jgryn-network/common/"
export MAGICK_CONFIGURE_PATH

MAGICK_CODER_MODULE_PATH="/Applications/MAMP/htdocs/bitnami-jgryn-network/common/lib/ImageMagick-6.9.8/modules-Q16/coders"
export MAGICK_CODER_MODULE_PATH

##### FONTCONFIG ENV #####
FONTCONFIG_PATH="/Applications/MAMP/htdocs/bitnami-jgryn-network/common/etc/fonts"
export FONTCONFIG_PATH
##### PHP ENV #####
PHP_PATH=/Applications/MAMP/htdocs/bitnami-jgryn-network/php/bin/php
COMPOSER_HOME=/Applications/MAMP/htdocs/bitnami-jgryn-network/php/composer
export PHP_PATH
export COMPOSER_HOME
##### MYSQL ENV #####

##### APACHE ENV #####

##### CURL ENV #####
CURL_CA_BUNDLE=/Applications/MAMP/htdocs/bitnami-jgryn-network/common/openssl/certs/curl-ca-bundle.crt
export CURL_CA_BUNDLE
##### SSL ENV #####
SSL_CERT_FILE=/Applications/MAMP/htdocs/bitnami-jgryn-network/common/openssl/certs/curl-ca-bundle.crt
export SSL_CERT_FILE
OPENSSL_CONF=/Applications/MAMP/htdocs/bitnami-jgryn-network/common/openssl/openssl.cnf
export OPENSSL_CONF
OPENSSL_ENGINES=/Applications/MAMP/htdocs/bitnami-jgryn-network/common/lib/engines
export OPENSSL_ENGINES


. /Applications/MAMP/htdocs/bitnami-jgryn-network/scripts/build-setenv.sh
