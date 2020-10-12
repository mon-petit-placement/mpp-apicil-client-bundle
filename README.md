# Symfony Bundle to interact with Apicil API

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-267-blue"/>
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(267%2F267)-green"/>
<img src="https://img.shields.io/badge/Methods%20implemented-99%25%20(266%2F267)-yellowgreen"/>
<img src="https://img.shields.io/badge/Methods%20tested-15%25%20(40%2F267)-red"/>
<img src="https://img.shields.io/badge/Documentation-60%25-yellow"/>

## Installation

To install this bundle, simply run the following command:
```
$ composer require mpp/apicil-client-bundle
```

## Configuration

First create a guzzle client:
```yaml
// config/packages/eight_point_guzzle.yaml
eight_points_guzzle:
    clients:
        my_apicil_client:
            base_url: '%env(APICIL_BASE_URL)%'
            options:
                auth:
                    - '%env(APICIL_USERNAME)%'
                    - '%env(APICIL_PASSWORD)%'
```

Then configure this client to be used by the bundle:
```yaml
// config/packages/mpp_apicil_client.yaml
mpp_apicil_client:
    http_client: 'eight_points_guzzle.client.my_apicil_client'
```

Make sure to have enabled the serializer & property info component in symfony configuration (for serialization/deserialization):
```yaml
// config/packages/framework.yaml
framework:
    serializer:
        enabled: true
    property_info:
        enabled: true
```

## Clients

Here is the mapping of client for each specification name

<table>
    <thead>
        <tr>
            <th>Specification name</th>
            <th>Base path</th>
            <th>Client</th>
            <th>Client domain alias</th>
            <th>Usable ?</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Actualisation Connaissance Client</td>
            <td>/connaissanceclient</td>
            <td><a href="./Client/ApicilAccClientInterface.php">ApicilAccClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilaccclient">acc</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Arbitrage</td>
            <td>/arbitrage</td>
            <td><a href="./Client/ApicilArbitrationClientInterface.php">ApicilArbitrationClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilarbitrationclient">arbitration</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Compte titre</td>
            <td>/comptestitres</td>
            <td><a href="./Client/ApicilTradingAccountClientInterface.php">ApicilTradingAccountClient</a></td>
            <td><a href="./Resources/docs/clients.md#apiciltradingaccountclient">trading_account</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td rowspan=2>Contrat</td>
            <td>/contrats</td>
            <td><a href="./Client/ApicilContractClientInterface.php">ApicilContractClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilcontractclient">contract</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>/contratscollectifs</td>
            <td><a href="./Client/ApicilCollectiveContractClientInterface.php">ApicilCollectiveContractClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilcollectivecontractclient">collective_contract</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td rowspan=2>Données de références</td>
            <td>/referentiel</td>
            <td><a href="./Client/ApicilReferentialClientInterface.php">ApicilReferentialClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilreferentialclient">referential</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>/produit</td>
            <td><a href="./Client/ApicilProductClientInterface.php">ApicilProductClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilproductclient">product</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td rowspan=3>KYC</td>
            <td>/profilfinancier</td>
            <td><a href="./Client/ApicilFinancialProfileClientInterface.php">ApicilFinancialProfileClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilfinancialprofileclient">financial_profile</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>/kyc/coordonnees</td>
            <td><a href="./Client/ApicilKycContactInformationClientInterface.php">ApicilKycContactInformationClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilkyccontactinformationclient">kyc_contact_information</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>/kyc/iban</td>
            <td><a href="./Client/ApicilKycIbanClientInterface.php">ApicilKycIbanClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilkycibanclient">kyc_iban</a></td>
            <td>Partially</td>
        </tr>
        <tr>
            <td>Preconisation - interne</td>
            <td>/interne/preconisation/contrat</td>
            <td><a href="./Client/ApicilPreconizationClientInterface.php">ApicilPreconizationClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilpreconizationclient">preconization</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Profil de gestion</td>
            <td>/modegestion</td>
            <td><a href="./Client/ApicilManagementClientInterface.php">ApicilManagementClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilmanagementclient">management</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td rowspan=2>Rachat</td>
            <td>/rachatpartiel</td>
            <td><a href="./Client/ApicilPartialRepurchaseClientInterface.php">ApicilPartialRepurchaseClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilpartialrepurchaseclient">partial_repurchase</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>/rachattotal</td>
            <td><a href="./Client/ApicilTotalRepurchaseClientInterface.php">ApicilTotalRepurchaseClient</a></td>
            <td><a href="./Resources/docs/clients.md#apiciltotalrepurchaseclient">total_repurchase</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Souscription</td>
            <td>/projet</td>
            <td><a href="./Client/ApicilProjectClientInterface.php">ApicilProjectClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilprojectclient">project</a></td>
            <td>Yes</td>
        </tr>
        <tr>
            <td>Versement</td>
            <td>/versement</td>
            <td><a href="./Client/ApicilPaymentClientInterface.php">ApicilPaymentClient</a></td>
            <td><a href="./Resources/docs/clients.md#apicilpaymentclient">payment</a></td>
            <td>Yes</td>
        </tr>
    </tbody>
</table>

## How to use ?

#### How to get a specific client domain ?

Here is a sample controller on how to get a specific client domain:
```php
<?php

namespace App\Controller;

use Mpp\ApicilClientBundle\Client\ApicilClientDomainRegistryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExampleController extends AbstractController
{
    public function exampleAction(ApicilClientDomainRegistryInterface $apicilClientRegistry)
    {
        // Here are the three different available methods on how to retrieve a client domain by its alias (choose the one you prefer)
        $myClient = $apicilClientRegistry->get('client_domain_alias');
        // or
        $myClient = $apicilClientRegistry->getClientDomainAlias();

        // Execute operations from the retrieved client domain
        // ...
    }
}
```

#### How to use each clients ?

You'll find an exemple of usage of each client below

-  [WIP] [ApicilAccClient](./Resources/docs/examples/acc.md) (acc)
-  [WIP] [ApicilArbitrationClient](./Resources/docs/examples/arbitration.md) (arbitration)
-  [ApicilTradingAccountClient](./Resources/docs/examples/trading_account.md) (trading_account)
-  [WIP] [ApicilContractClient](./Resources/docs/examples/contract.md) (contract)
-  [WIP] [ApicilCollectiveContractClient](./Resources/docs/examples/collective_contract.md) (collective_contract)
-  [WIP] [ApicilReferentialClient](./Resources/docs/examples/referential.md) (referential)
-  [WIP] [ApicilProductClient](./Resources/docs/examples/product.md) (product)
-  [WIP] [ApicilFinancialProfileClient](./Resources/docs/examples/financial_profile.md) (financial_profile)
-  [WIP] [ApicilKycContactInformationClient](./Resources/docs/examples/kyc_contact_information.md) (kyc_contact_information)
-  [WIP] [ApicilKycIbanClient](./Resources/docs/examples/kyc_iban.md) (kyc_iban)
-  [WIP] [ApicilPreconizationClient](./Resources/docs/examples/preconization.md) (preconization)
-  [WIP] [ApicilManagementClient](./Resources/docs/examples/management.md) (management)
-  [WIP] [ApicilPartialRepurchaseClient](./Resources/docs/examples/partial_repurchase.md) (partial_repurchase)
-  [WIP] [ApicilTotalRepurchaseClient](./Resources/docs/examples/total_repurchase.md) (total_repurchase)
-  [ApicilProjectClient](./Resources/docs/examples/project.md) (project)
-  [WIP] [ApicilPaymentClient](./Resources/docs/examples/payment.md) (payment)

## Tests

Update the environment variables in [phpunit.xml.dist](./phpunit.xml.dist):

```xml
<!-- ... -->
<php>
    <!-- ... -->
    <env name="APP_ENV" value="test" />
    <env name="APICIL_BASE_URL" value="APICIL_BASE_URL" />
    <env name="APICIL_USERNAME" value="USEERNAME" />
    <env name="APICIL_PASSWORD" value="PASSWORD" />
    <!-- ... -->
</php>
<!-- ... -->
```

Then, use the following commands if you want to run the tests suite

```sh
$ make composer-install # once

$ make phpunit
```

## TODO

- [ ] Create missing model/dto classes used in clients
    - [X] CourtierDto
    - [X] DonneesReferencesActifDto
    - [X] FraisEncoursDto
    - [X] PeriodiciteDto
    - [ ] ResultatDeCreationResource
    - [ ] SituationCompteDto
    - [ ] ProfilFinancierActeDto
    - [ ] ProfilFinancierConsultationDto
    - [ ] ProfilFinancierDto
    - [ ] ProfilFinancierQuestionDto
    - [ ] RepartitionDto
    - [ ] ChangementCoordonneesDto
    - [ ] ErreurCodeFonctionnelDto
    - [ ] IbanDto
    - [ ] RachatPartielDtoDeConsultation
    - [ ] EmailPropositionDto
    - [ ] RecuperationVersementSuppression
    - [ ] SuppressionOptionDto
    - [ ] ModeGestionDto
    - [ ] QuestionSupportStructureDto
    - [ ] EmailPropositionSouscriptionDto
    - [ ] ListDocumentDto
    - [ ] CompteTitreDto
    - [ ] ContratProfilGestionDto
    - [ ] RecuperationContratProfileGestionDto
    - [X] TrClasseActifDto
    - [ ] BasePreconisationDto
    - [ ] TrProfilAllocationAutoriseDto
- [ ] Add unit tests
    - [ ] ApicilAccClient
    - [ ] ApicilArbitrationClient
    - [ ] ApicilTradingAccountClient
    - [ ] ApicilContractClient
    - [ ] ApicilCollectiveContractClient
    - [X] ApicilReferentialClient
    - [ ] ApicilProductClient
    - [ ] ApicilFinancialProfileClient
    - [ ] ApicilKycContactInformationClient
    - [ ] ApicilKycIbanClient
    - [ ] ApicilPreconizationClient
    - [ ] ApicilManagementClient
    - [ ] ApicilPartialRepurchaseClient
    - [ ] ApicilTotalRepurchaseClient
    - [ ] ApicilProjectClient
    - [ ] ApicilPaymentClient
- [ ] Update documetation
    - [ ] Add client exemple usage for all routes in documentation
- [ ] Enhance how options are resolved (ex: how file related fields are handled => add Trait ?)
