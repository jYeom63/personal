# How to use XML
- Difference between XML and XDS
    - XML is the format for request & response
    - XDS is the schema definition (You can check rules from this document)
- When facing the following error:`Cannot find the declaration of element 'MyElement'`, you need to fit in the namesapaces.([link1](https://stackoverflow.com/questions/13310637/cvc-elt-1-cannot-find-the-declaration-of-element-myelement), [link2](https://stackoverflow.com/questions/40982002/xml-cannot-find-the-declaration-of-element))
```
<GetCardholderProfile xmlns="http://www.i2c.com/cardsws/schema/request">
```

- SOAP envelops
```
<?xml version="1.0" encoding="utf-8"?>
<soapenv:Envelope 
    xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" 
    xmlns:xsd="http://www.w3.org/2001/XMLSchema" 
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
    <soapenv:Body>
        
    </soapenv:Body>
</soapenv:Envelope>
```

- How to add SOAP header in `curl` command:
```
-H "SOAPAction:;"
```

- How to use `curl`
```
curl -H "Content-Type: text/xml; charset=utf-8" -H "SOAPAction:;" -X POST -d @addCard.xml https://ws2.mycardplace.com:6443/MCPWebServiceDL/services/MCPWSHandler
```