# Chronopost Relay PHP Soap generated Lib

LE SERVICE DE RECHERCHE DE POINT DE LIVRAISON CHRONOPOST (PointRelaisService)

Chronopost WSDL php generated lib using https://github.com/WsdlToPhp/PackageGenerator

This package will only contain generated content from chronopost endpoint https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl

```sh
composer require kwaadpepper/chronopost-relay
```

```sh
wsdltophp generate:package --namespace ChronopostRelay \
    --urlorpath="https://ws.chronopost.fr/recherchebt-ws-cxf/PointRelaisServiceWS?wsdl" \
    --destination="." \
    --composer-name="kwaadpepper/chronopost-relay" \
    --force
```
