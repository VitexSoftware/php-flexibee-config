![Package Logo](https://raw.githubusercontent.com/VitexSoftware/php-flexibee-config/master/package_logo.png "Project Logo")

php-flexibee-config
===================

Konfigurátor a sdílená konfigurace pro aplikace využívající php-flexibee

<iframe width="560" height="315" src="https://www.youtube.com/embed/JJW6JAiqgAE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Debian/Ubuntu
-------------

Pro Linux jsou k dispozici .deb balíčky. Prosím použijte repo:

    wget -O - http://v.s.cz/info@vitexsoftware.cz.gpg.key|sudo apt-key add -
    echo deb http://v.s.cz/ stable main > /etc/apt/sources.list.d/ease.list
    aptitude update
    aptitude install php-flexibee-config

<iframe width="560" height="315" src="https://www.youtube.com/embed/pToYZfh3dFE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

Po instalaci balíku jsou v systému k dispozici dva nové příkazy:

  * php-flexibee-config      - nástroj příkazové řádky pro změnu hodnot v /etc/flexibee/client.json
  * php-flexibee-checker     - slouží k otestování nastavené konfigurace
  * php-flexibee-reconfigure - dialogy k zadání přihlašovacích údajů

Závislosti
----------

Tento nástroj ke svojí funkci využívá následující knihovny:

 * [**EasePHP Framework**](https://github.com/VitexSoftware/EaseFramework) - pomocné funkce např. logování
 * [**FlexiPeeHP**](https://github.com/Spoje-NET/FlexiPeeHP)        - komunikace s [FlexiBee](https://flexibee.eu/)

Balíček je využíván těmito aplikacemi:

 * [flexibee-testing-tools]( https://github.com/VitexSoftware/FlexiBee-TestingTools )
 * [php-flexibee-reminder]( https://github.com/VitexSoftware/php-flexibee-reminder)
 * [php-flexibee-matcher]( https://github.com/VitexSoftware/php-flexibee-matcher )
