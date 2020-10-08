# Apicil client domains

#### ApicilACCClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-32-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-56%25%20(32%2F32)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-56%25%20(32%2F32)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F32)-red"/>  

```php
<?php

// GET /connaissanceclient/{idClient}
public function get(int $id): ConnaissanceClient;

// PUT /connaissanceclient/{idClient}
public function update(int $id, array $options): ResultatDeCreationResource;

// DELETE /connaissanceclient/{idClient}
public function remove(int $id): bool;

// PUT /connaissanceclient/{idClient}/abandonner
public function giveUp(int $id): ResultatDeCreationResource;

// PUT /connaissanceclient/{idClient}/asigner
public function updateFromModel(int $id, ConnaissanceClient $customerKnowledge): ResultatDeCreationResource;

// PUT /connaissanceclient/{idClient}/brouillon
public function updateDraft(int $id, array $options): ResultatDeCreationResource;

// GET /connaissanceclient/{idClient}/bulletin
public function getBulletin(int $id): File;

// GET /connaissanceclient/{idClient}/documents
public function getDocuments(int $id): array;

// PUT /connaissanceclient/{idClient}/documents
public function addDocument(int $id, array $options);

// GET /connaissanceclient/{idClient}/eligible
public function isEligible(int $id): DtoEligibilite;

// GET /connaissanceclient/{idClient}/signature
public function sendSignatureBySms(int $id);

// POST /connaissanceclient/{idClient}/signature/{otp}
public function approveSignature(int $id, string $otp);

// POST /connaissanceclient/{idClient}/transmettre
public function send(int $id): ConnaissanceClient;

// GET /connaissanceclient/{idClient}/validee
public function getValidInformations(int $id): ConnaissanceClient;

// PUT /connaissanceclient/{idClient}/valider
public function approve(int $id, array $options);

// PUT /connaissanceclient/{refExterneApicil}/telephone
public function updatePhoneNumber(string $externalReference, TelephoneDto $$phoneNumber): bool;

// POST /connaissanceclient/codesecurite/generer
public function generateSecurityCode(array $options): bool;

// POST /connaissanceclient/{idClient}/valider
public function approveSecurityCode(array $options): array;

// GET /connaissanceclient/contrat/{idClient}
public function getByContract(int $contractId): ConnaissanceClient;

// PUT /connaissanceclient/contrat/{idClient}
public function updateByContract(int $contractId, array $options): ResultatDeCreationResource;

// DELETE /connaissanceclient/contrat/{idClient}
public function removeByContract(int $contractId): bool;

// PUT /connaissanceclient/contrat/{idClient}/abandonner
public function giveUpByContract(int $contractId): ResultatDeCreationResource;

// PUT /connaissanceclient/contrat/{idClient}/asigner
public function updateFromModelByContract(int $contractId, ConnaissanceClient $customerKnowledge): ResultatDeCreationResource;

// PUT /connaissanceclient/contrat/{idClient}/brouillon
public function updateDraftByContract(int $contractId, array $options): ResultatDeCreationResource;

// GET /connaissanceclient/contrat/{idClient}/bulletin
public function getBulletinByContract(int $contractId): File;

// GET /connaissanceclient/contrat/{idClient}/documents
public function getDocumentsByContract(int $contractId): array;

// PUT /connaissanceclient/contrat/{idClient}/documents
public function addDocumentByContract(int $contractId, array $options);

// GET /connaissanceclient/contrat/{idClient}/eligible
public function isEligibleByContract(int $contractId): DtoEligibilite;

// POST /connaissanceclient/contrat/{idClient}/signature/{otp}
public function approveSignatureByContract(int $contractId, string $otp);

// POST /connaissanceclient/contrat/{idClient}/transmettre
public function sendByContract(int $contractId): ConnaissanceClient;

// GET /connaissanceclient/contrat/{idClient}/validee
public function getValidInformationsByContract(int $contractId): ConnaissanceClient;

// PUT /connaissanceclient/contrat/{idClient}/valider
public function approveByContract(int $contractId, array $options);
```

#### ApicilArbitrationClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-29-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(29%2F29)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(29%2F29)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F29)-red"/>  

```php
<?php

// POST /arbitrage/
public function create(array $options): ActeRetourCreationDto;

// POST /arbitrage/{arbitrageId}/abandonner
public function giveUp(int $id);

// POST /arbitrage/{arbitrageId}/refuser
public function refuse(int $id, array $options = []): bool;

// GET /arbitrage/{id}
public function get(int $id): ArbitrageDtoDeConsultation;

// PUT /arbitrage/{id}
public function update(int $id, array $options): array;

// DELETE /arbitrage/{id}
public function remove(int $id): bool;

// GET /arbitrage/{id}/bulletin
public function getBulletin(int $id): File;

// GET /arbitrage/{id}/document/{docSousCat}
public function getDocument(int $id, int $documentId): RecuperationActeDocSousCategorieDto;

// PUT /arbitrage/{id}/document/{docSousCat}
public function addDocument(int $id, string $documentCategory, array $options): ActeRetourCreationDto;

// DELETE /arbitrage/{id}/document/{docSousCat}
public function removeDocument(int $id, string $documentId): bool;

// GET /arbitrage/{id}/documents
public function getDocumentTypes(int $id): array;

// POST /arbitrage/{id}/mail/tester
public function testEmail(int $id, EmailPropositionActeDto $email): bool;

// POST /arbitrage/{id}/questionnaires
public function verifySurveys(int $id, array $surveys): int;

// PUT /arbitrage/{id}/reprendre
public function resume(int $id): ActeRetourCreationDto;

// GET /arbitrage/{id}/signature
public function sendSignatureBySms(int $id);

// POST /arbitrage/{id}/signature/{otp}
public function approveSignature(int $id, string $otp);

// PUT /arbitrage/{id}/telephone
public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber);

// POST /arbitrage/{id}/transmettre
public function sendToCustomer(int $id, EmailPropositionActeDto $email);

// PUT /arbitrage/{idActe}/relancer
public function restart(int $id, array $options);

// POST /arbitrage/asigner
public function createFromModel(int $id, ArbitrageDto $arbitration): bool;

// PUT /arbitrage/asigner/{id}
public function updateFromModel(int $id, ArbitrationDto $$arbitration): ArbitrationDto;

// POST /arbitrage/codesecurite/generer
public function generateSecurityCode(array $options): array;

// POST /arbitrage/codesecurite/valider
public function approveSecurityCode(array $options): ReponseClientHorsMursDto;

// GET /arbitrage/contrat/{contratId}/existe
public function getByContract(int $contractId): OperationEnCoursDto;

// GET /arbitrage/contrat/{id}/eligible
public function isContractEligible(int $contractId): DtoEligibilite;

// GET /arbitrage/contrat/{id}/tauxfrais
public function getArbitrationFees(int $contractId): FraisArbitrageDto;

// GET /arbitrage/erreurs
public function getErrors(int $id): array;

// GET /arbitrage/mail/template
public function getEmailTemplate(): EmailPropositionActeDto;

// GET /arbitrage/support/investissement/{contratId}
public function getInvestmentEligibleSupports(int $contractId, array $options): array;
```

#### ApicilTradingAccountClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-1-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(1%2F1)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(1%2F1)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F1)-red"/>

```php
<?php

// GET /comptestitres/{idContrat}
public function getByContract(int $contractId): CompteTitreDto;
```

#### ApicilCollectiveContractClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-2-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(2%2F2)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(2%2F2)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F2)-red"/>

```php
<?php

// GET /contratscollectifs
public function getAll(array $options = []): ListContratCollectifsDto;

// GET /contratscollectifs/csv
public function exportAll(array $options = []);
```

#### ApicilContractClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-9-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(9%2F9)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(9%2F9)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F9)-red"/>

```php
<?php

// GET /contrats
public function getAll(array $options = []): ListContratDto;

// GET /contrat/{numContrat}/documents
public function getDocuments(int $id, array $options = []): DocumentMetadataDto;

// GET /contrat/document/{docId}
public function getDocument(int $id): File;

// GET /contrat/{idContrat}
public function get(int $id): ContratDto;

// GET /contrat/{idContrat}/clausebeneficiare
public function getBeneficiaryClause(int $id): ClauseBeneficiareDto;

// GET /contrat/{idContrat}/indicateurs
public function getIndicators(int $id): IndicateursContratDto;

// GET /contrat/{idContrat}/mouvements
public function getMovements(int $id, array $options = []): OperationDto;

// GET /contrat/{idContrat}/relevedesituation
public function getSituationReport(int $id, array $options): SituationCompteDto;

// GET /contrat/{idContrat}/situationcompte
public function getSituationReportPDF(int $id, array $options): SituationCompteDto;
```

#### ApicilReferentialClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-40-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(40%2F40)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(40%2F40)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F40)-red"/>

```php
<?php

// GET /referentiel/courtier/{courtierId}
public function getBroker(int $id): CourtierDto;

// GET /referentiel/courtiers/full
// GET /referentiel/courtiers/light
public function getBrokers(array $options): array;

// GET /referentiel/adresseAPI
public function getApiAddresses(array $options): string;

// GET /referentiel/categorieProfessionnelle
public function getProfessionalCategories(array $options = []): array;

// GET /referentiel/civilite
public function getCivilities(): array;

// GET /referentiel/classeActifsAllocation
public function getAssetClasses(): array;

// GET /referentiel/departement
public function getDepartments(array $options = []): array;

// GET /referentiel/dispositionDeces
public function getDeathDispositions(): array;

// GET /referentiel/horizonInvestissement
public function getInvestmentHorizons(): array;

// GET /referentiel/lienFamilial
public function getFamilyLinks(array $options = []): array;

// GET /referentiel/lienParente
public function getParentalLinks(): array;

// GET /referentiel/mandataireFiscal
public function getFiscalAgents(): array;

// GET /referentiel/modePaiement/{courtierId}
public function getPaymentMethods(string $brokerId, array $options = []): array;

// GET /referentiel/nationalite
public function getNationalities(array $options = []): array;

// GET /referentiel/objectifInvestissement
public function getInvestmentGoals(): array;

// GET /referentiel/pays
public function getCountries(array $options = []): array;

// GET /referentiel/periodicite/{codeProduit}
public function getPaymentFrequencies(?string $productReference = null): PeriodiciteDto;

// GET /referentiel/personnePolitiquementExposee/fonction
public function getPoliticallyExposedPersonFunctions(): array;

// GET /referentiel/personnePolitiquementExposee/lienParente
public function getPoliticallyExposedPersonParentalLinks(): array;

// GET /referentiel/personnePolitiquementExposee/natureLien
public function getPoliticallyExposedPersonLinkNatures(): array;

// GET /referentiel/produit
public function getProducts(): array;

// GET /referentiel/produit/{codeProduit}
public function getProduct(string $reference): ProduitDto;

// GET /referentiel/profession
public function getJobs(): array;

// GET /referentiel/regimeMatrimonial
public function getMatrimonialRegimes(): array;

// GET /referentiel/rum
public function getUniqueMandateReference(): string;

// GET /referentiel/secteurActivite
public function getActivitySectors(array $options = []): array;

// GET /referentiel/situationFamiliale
public function getFamilialSituations(): array;

// GET /referentiel/situationProfessionelle
public function getProfessionalSituations(array $options = []): array;

// GET /referentiel/support/{isin}/fiche
public function getSupport(string $isin): SupportDto;

// GET /referentiel/support/{isin}/pdf
public function getSupportPdf(string $isin, ?string $acceptLanguage = null): SupportDto;

// GET /referentiel/support/investissement/{codeProduit}
public function getInvestmentEligibleSupports(string $productReference, array $options = []): array;

// GET /referentiel/support/vp
public function getScheduledPaymentEligibleSupports(array $options = []): array;

// GET /referentiel/telephone/indicatif
public function getPhoneCodes(array $options = []): array;

// GET /referentiel/typecontrat
public function getContractTypes(): array;

// GET /referentiel/typeDocument
public function getDocumentTypes(): array;

// GET /referentiel/typePatrimoine
public function getPatrimonyTypes(): array;

// GET /referentiel/typeRevenu
public function getIncomeTypes(): array;

// GET /referentiel/typeSouscription
public function getSubscriptionTypes(): array;

// GET /referentiel/uniteCompte/frais/{codeProduit}
public function getOutstandingCosts(?string $productReference = null): array;

// GET /referentiel/ville
public function getCities(array $options = []): array;
```

#### ApicilProductClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-4-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(4%2F4)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(4%2F4)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F4)-red"/>

```php
<?php

// GET /product/{codeProduit}/dic
public function getDic(string $reference, array $options = []): File;

// GET /product/{codeProduit}/modegestion
public function getGestionModes(string $reference, array $options = []): array;

// GET /product/{codeProduit}/modegestion/{idContrat}
public function getContractGestionModes(string $reference, int $contractId, array $options = []): array;

// GET /product/{codeProduit}/support/{isinSupport}/questions
public function getSupportQuestions(string $reference, string $isin): array;

```

#### ApicilFinancialProfileClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-13-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(13%2F13)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(13%2F13)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F13)-red"/>

```php
<?php

// GET /profilfinancier/{id}/signature
public function sendSignatureBySMS(int $id);

// GET /profilfinancier/{idClient}
public function get(int $customerId): ProfilFinancierConsultationDto;

// PUT /profilfinancier/{idClient}
public function createFromModel(int $customerId, ProfilFinancierActeDto $financialProfile): ActeRetourCreationDto;

// POST /profilfinancier/{idClient}/abondonner
public function giveUp(int $customerId);

// GET /profilfinancier/{idClient}/bulletin
public function getBulletin(int $customerId);

// GET /profilfinancier/{idClient}/eligible
public function isEligible(int $customerId): DtoEligibilite;

// POST /profilfinancier/{idClient}/refuser
public function refuse(int $customerId, array $options = []): bool;

// GET /profilfinancier/{idClient}/signature/{otp}
public function approveSignature(int $customerId, string $otp);

// POST /profilfinancier/{idClient}/transmettre
public function sendToCustomer(int $customerId);

// GET /profilfinancier/{idClient}/validee
public function getValid(int $customerId): ProfilFinancierConsultationDto;

// GET /profilfinancier/contrat/{contratId}
public function getByContract(int $contractId): ProfilFinancierDto;

// POST /profilfinancier/contrat/{contratId}/adequation
public function getContractResult(int $contractId, RepartitionDto $wallet, array $options): ResultatAdequationProfilFinancierDto;

// GET /profilfinancier/questions/{idClient}
public function getQuestions(int $customerId): array;
```

#### ApicilKycContactInformationClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-16-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(16%2F16)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(16%2F16)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F16)-red"/>

```php
// POST /kyc/coordonnees
public function create(array $options): ResultatDeCreationResource;

// GET /kyc/coordonnees/{id}
public function get(int $id): CoordonneesDto;

// PUT /kyc/coordonnees/{id}
public function update(int $id, ChangementCoordonneesDto $contactInformation);

// DELETE /kyc/coordonnees/{id}
public function remove(int $id): bool;

// GET /kyc/coordonnees/{id}/document/{docSousCat}
public function getDocumentByCategory(int $id, string $category): File;

// PUT /kyc/coordonnees/{id}/document/{docSousCat}
public function addDocument(int $id, string $category, array $options): ResultatDeCreationResource;

// DELETE /kyc/coordonnees/{id}/document/{docSousCat}
public function removeDocument(int $id, string $documentId);

// GET /kyc/coordonnees/{id}/documents
public function getDocuments(int $id): array;

// GET /kyc/coordonnees/{id}/documents/{idDocument}
public function getDocument(int $id, string $documentId): File;

// PUT /kyc/coordonnees/{id}/jdd
public function updateProofOfResidence(int $id, array $options = []): bool;

// PUT /kyc/coordonnees/{id}/valider
public function approve(int $id);

// GET /kyc/coordonnees/contrat/{contratId}
public function getContract(int $contractId): CoordonneesDto;

// GET /kyc/coordonnees/contrat/{contratId}/eligible
public function isContractEligible(int $contractId): DtoEligibilite;

// GET /kyc/coordonnees/contrat/{contratId}/existe
public function hasContract(int $contractId): OperationEnCoursDto;

// GET /kyc/coordonnees/erreurs
public function getErrors(): array;

// GET /kyc/coordonnees/piece-identite
public function getIdentityCard(array $options = []): File;
```

#### ApicilKycIbanClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-16-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(16%2F16)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-94%25%20(15%2F16)-yellowgreen"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F16)-red"/>  

```php
<?php

// PUT /kyc/{idActe}/relancer
public function retry(int $id, array $options): bool;

// POST /kyc/iban
public function create(array $options): ActeRetourCreationDto;

// GET /kyc/iban/{id}
public function get(int $id): IbanDto;

// PUT /kyc/iban/{id}
public function update(int $id, array $options);

// DELETE /kyc/iban/{id}
public function remove(int $id): bool;

// GET /kyc/iban/{id}/document/{docSousCat}
public function getDocumentByCategory(int $id, string $category);

// PUT /kyc/iban/{id}/document/{docSousCat}
public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto;

// DELETE /kyc/iban/{id}/document/{idDocument}
public function removeDocument(int $id, string $documentId): bool;

// GET /kyc/iban/{id}/documents
public function getDocuments(int $id): array;

// GET /kyc/iban/{id}/documents/{idDocument}
public function getDocument(int $id, string $documentId): File;

// PUT /kyc/iban/{id}/valider
public function approve(int $id);

// POST /kyc/iban/asigner
public function createFromModel(IbanDto $iban): ResultatDeCreationResource;

// GET /kyc/iban/contrat/{contratId}
public function getByContract(int $contractId): array;

// GET /kyc/iban/contrat/{contratId}/eligible
public function isContractEligible(int $contractId): DtoEligibilite;

// GET /kyc/iban/contrat/{contratId}/existe
public function hasContract(int $contractId): OperationEnCoursDto;

// GET /kyc/iban/erreurs
public function getErrors(): array;
```

#### ApicilPreconizationClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-2-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(2%2F2)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(2%2F2)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F2)-red"/>

```php
<?php

// POST /interne/preconisation/contrat/{contratId}/adequation
public function calculate(int $contractId, BasePreconisationDto $preconization): bool;

// GET /interne/preconisation/contrat/{contratId}/allocationClasseAutorise
public function getAuthorizedAssetClassAllocation(int $contractId, array $options): array;
```

#### ApicilManagementClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-30-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(30%2F30)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(30%2F30)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F30)-red"/>

```php
<?php

// POST /modegestion
public function create(array $options): ActeRetourCreationDto;

// GET /modegestion/{code}/contrat/{idContract}
public function getContractDocument(string $code, int $contractId): File;

// GET /modegestion/{id}
public function get(int $id): RecuperationContratProfileGestionDto;

// PUT /modegestion/{id}
public function update(int $id, array $options): ActeRetourCreationDto;

// DELETE /modegestion/{id}
public function remove(int $id): bool;

// POST /modegestion/{id}/abandonner
public function giveUp(int $id);

// PUT /modegestion/{id}/asigner
public function updateFromModel(int $id, ContratProfilGestionDto $gestionProfile): ActeRetourCreationDto;

// GET /modegestion/{id}/bulletin
public function getBulletin(int $id): File;

// GET /modegestion/{id}/document/{docSousCat}
public function getDocumentByCategory(int $id, string $category): RecuperationActeDocSousCategorieDto;

// PUT /modegestion/{id}/document/{docSousCat}
public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto;

// DELETE /modegestion/{id}/document/{idDocument}
public function removeDocument(int $id, string $documentId);

// GET /modegestion/{id}/documents
public function getDocuments(int $id): RecuperationActeDocSousCategorieDto;

// POST /modegestion/{id}/mail/tester
public function testEmail(int $id, EmailPropositionActeDto $email);

// POST /modegestion/{id}/questionnaires
public function verifySurveys(int $id, array $surveys): int;

// POST /modegestion/{id}/refuser
public function refuse(int $id, array $options =  []);

// PUT /modegestion/{id}/reprendre
public function resume(int $id): ActeRetourCreationDto;

// GET /modegestion/{id}/signature
public function sendSignatureBySms(int $id);

// POST /modegestion/{id}/signature/{otp}
public function approveSignature(int $id, string $otp);

// PUT /modegestion/{id}/telephone
public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber);

// POST /modegestion/{id}/transmettre
public function sendToCustomer(int $id, EmailPropositionActeDto $email);

// PUT /modegestion/{idActe}/relancer
public function restart(int $id, array $options);

// POST /modegestion/asigner
public function createFromModel(ContratProfilGestionDto $gestionProfile): ActeRetourCreation;

// POST /modegestion/codesecurite/generer
public function generateSecurityCode(array $options);

// POST /modegestion/codesecurite/valider
public function approveSecurityCode(array $options): ReponseClientHorsMursDto;

// GET /modegestion/contrat/{contratId}/existe
public function hasContract(int $contractId): OperationEnCoursDto;

// GET /modegestion/contrat/{contratId}/eligible
public function isContractEligible(int $contractId): DtoEligibilite;

// GET /modegestion/contrat/{idContrat}
public function getByContract(int $contractId): ContratProfilGestionDto;

// GET /modegestion/mail/template
public function getEmailTemplate(): EmailPropositionActeDto;

// GET /modegestion/support/investissement/{contratId}
public function getInvestmentEligibleSupports(int $contractId, array $options = []): ListeDesSupports;

// GET /modegestion/support/investissement/details/{contratId}
public function getInvestmentEligibleSupportDetails(int $contractId, array $options = []): ListeDesSupports;

```

#### ApicilPartialRepurchaseClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-22-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(22%2F22)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(22%2F22)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F22)-red"/>

```php
<?php

// POST /rachatpartiel/
public function create(array $options): ActeRetourCreationDto;

// GET /rachatpartiel/{id}
public function get(int $id): RachatPartielDtoDeConsultation;

// DELETE /rachatpartiel/{id}
public function remove(int $id): bool;

// POST /rachatpartiel/{id}/abandonner
public function giveUp(int $id): bool;

// GET /rachatpartiel/{id}/bulletin
public function getBulletin(int $id): File;

// PUT /rachatpartiel/{id}/document/{docSousCat}
public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto;

// GET /rachatpartiel/{id}/documents
public function getDocuments(int $id): ActeDocumentDto;

// GET /rachatpartiel/{id}/documents/{idDocument}
public function getDocument(int $id, int $documentId): File;

// POST /rachatpartiel/{id}/mail/tester
public function testEmail(int $id, EmailPropositionActeDto $email);

// POST /rachatpartiel/{id}/refuser
public function refuse(int $id, array $options = []);

// PUT /rachatpartiel/{id}/reprendre
public function resume(int $id): ActeRetourCreationDto;

// GET /rachatpartiel/{id}/signature
public function sendSignatureBySms(int $id): bool;

// POST /rachatpartiel/{id}/signature/{otp}
public function approveSignature(int $id, string $otp);

// PUT /rachatpartiel/{id}/telephone
public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber);

// POST /rachatpartiel/{id}/transmettre
public function sendToCustomer(int $id, EmailPropositionActeDto $email);

// PUT /rachatpartiel/{idActe}/relancer
public function restart(int $id, array $options);

// POST /rachatpartiel/asigner
public function createFromModel(RachatDto $repurchase);

// PUT /rachatpartiel/asigner/{id}
public function updateFromModel(int $id, RachatDto $repurchase): RachatDto;

// GET /rachatpartiel/contrat/{contratId}/existe
public function hasContract(int $contractId): OperationEnCoursDto;

// GET /rachatpartiel/contrat/{id}/eligible
public function isContractEligible(int $contractId): DtoEligibilite;

// GET /rachatpartiel/contrat/{id}/limites
public function getContractAmountLimit(int $contractId): DtoEligibilite;

// GET /rachatpartiel/mail/template
public function getEmailTemplate(array $options): EmailPropositionActeDto;
```

#### ApicilTotalRepurchaseClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-3-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(3%2F3)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(3%2F3)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F3)-red"/>

```php
<?php

// GET /rachattotal/{id}/documents
public function getDocuments(int $id): ActeDocumentDto;

// GET /rachattotal/{id}/documents/idDocument
public function getDocument(int $id, int $documentId): File;

// PUT /rachattotal/{idActe}/relancer
public function restart(int $id, array $options);
```

#### ApicilProjectClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-12-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(12%2F12)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(12%2F12)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F29)-red"/>

```php
<?php

// POST /projet/
public function create(array $options): ReponseProjetDto;

// GET /projet/{id}
public function get(int $id): ProjetInvestissementRetour;

// PUT /projet/{id}
public function update(int $id, array $options): ReponseProjetDto;

// DELETE /projet/{id}
public function remove(int $id): bool;

// GET /projet/{id}/bulletin
public function getBulletin(int $id): File;

// GET /projet/{id}/signature/mail
public function sendSignatureByEmail(int $id): bool;

// GET /projet/{id}/signature/sms
public function sendSignatureBySms(int $id): bool;

// GET /projet/{projectId}/documents
public function getDocuments(int $id, array $options = []): ListDocumentDto;

// POST /projet/{projectIs}/signature/{otp}
public function approveSignature(int $id, string $otp);

// POST /projet/asigner
public function createFromInvestmentProject(ProjetInvestissement $project): ReponseProjetDto;

// POST /projet/connaissanceclient
public function createFromCustomerKnowledge(ConnaissanceClientProjet $projectCustomerKnowledge): ReponseProjetDto;

// GET /projet/transmettre/{projectId}
public function sendToCustomer(int $id, EmailPropositionSouscriptionDto $email): bool;
```

#### ApicilPaymentClient

<img src="https://img.shields.io/badge/Total%20methods%20from%20documentation-37-blue"/>  
<img src="https://img.shields.io/badge/Methods%20added-100%25%20(37%2F37)-green"/>  
<img src="https://img.shields.io/badge/Methods%20implemented-100%25%20(37%2F37)-green"/>  
<img src="https://img.shields.io/badge/Methods%20tested-0%25%20(0%2F37)-red"/>

```php
<?php

// POST /versement/
public function create(array $options): ActeRetourCreationDto;

// POST /versement/{id}
public function get(int $id): RecuperationVersementSuppression;

// DELETE /versement/{id}
public function remove(int $id): bool;

// GET /versement/{id}/bulletin
public function getBulletin(int $id): File;

// PUT /versement/{id}/cabinet/instance
public function startAsOffice(int $id);

// PUT /versement/{id}/cabinet/refuser
public function refuseAsOffice(int $id);

// GET /versement/{id}/document/{docSousCat}
public function getDocumentByCategory(int $id, string $category): RecuperationActeDocSousCategorieDoc;

// PUT /versement/{id}/document/{docSousCat}
public function addDocument(int $id, string $category, array $options): ActeRetourCreationDto;

// DELETE /versement/{id}/document/{idDocument}
public function removeDocument(int $id, string $documentId);

// GET /versement/{id}/documents
public function getDocuments(int $id): RecuperationActeDocSousCategorieDoc;

// GET /versement/{id}/documents/{idDocument}
public function getDocument(int $id, string $documentId): RecuperationActeDocSousCategorieDoc;

// POST /versement/{id}/mail/tester
public function testEmail(int $id, EmailPropositionActeDto $email);

// POST /versement/{id}/questionnaires
public function verifySurveys(int $id, array $surveys): int;

// PUT /versement/{id}/reprendre
public function resume(int $id): ActeRetourCreationDto;

// GET /versement/{id}/signature
public function sendSignatureBySms(int $id);

// POST /versement/{id}/signature/{otp}
public function approveSignature(int $id, string $otp);

// PUT /versement/{id}/telephone
public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber): bool;

// POST /versement/{id}/transmettre
public function sendToCustomer(int $id, EmailPropositionDto $email);

// PUT /versement/{idActe}/relancer
public function restart(int $id, array $options);

// POST /versement/{versementId}/abandonner
public function giveUp(int $id);

// PUT /versement/{versementId}/cabinet/valider
public function approveAsOffice(int $id);

// POST /versement/{versementId}/refuser
public function refuse(int $id, array $options = []);

// POST /versement/{versementId}/valider
public function approve(int $id);

// POST /versement/asigner
public function createFromModel(ModeleDeVersement $paymentModel);

// PUT /versement/asigner/{id}
public function updateFromModel(int $id, ModeleDeVersement $paymentModel): ModeleDeVersement;

// POST /versement/codesecurite/generer
public function generateSecurityCode(array $options);

// POST /versement/codesecurite/valider
public function approveSecurityCode(array $options): ReponseClientHorsMursDto;

// GET /versement/contrat/{contratId}/existe
public function hasContract(int $contractId, array $options = []): OperationEnCoursDto;

// GET /versement/contrat/{id}/eligible
public function isContractEligible(int $contractId, array $options = []): DtoEligibilite;

// GET /versement/contrat/{id}/montantminmax
public function getContractAmountLimits(int $contractId): MontantVCDto;

// GET /versement/contrat/{id}/option
public function getContractOption(int $contractId): DetailOptionVP;

// GET /versement/contrat/{id}/tauxminmax
public function getContractRateLimits(int $contractId): MontantVCDto;

// GET /versement/mail/template
public function getEmailTemplate(array $options = []): EmailPropositionActeDto;

// POST /versement/retireroption
public function removeOption(array $options): ActeRetourCreationDto;

// POST /versement/retireroption/asigner
public function removeOptionFromModel(SuppressionOptionDto $model): ActeRetourCreationDto;

// GET /versement/support/investissement/{contratId}
public function getInvestmentEligibleSupports(int $contractId, array $options = []): array;

// GET /versement/support/investissement/details/{contratId}
public function getInvestmentEligibleSupportDetails(int $contractId, array $options = []): array;

```
