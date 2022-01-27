# ApicilProjectClient - Examples

#### approveSignature(int $id, string $otp): void

```php
<?php

$apicilClientRegistry->getProject()->approveSignature(12, 'dGVzdHRlc3R0ZXN0dGVzdHRlc3Q=');
```

#### create(array $options): ReponseProjetDto

```php
<?php
use Symfony\Component\HttpFoundation\File\File;

$project = $apicilClientRegistry->getProject()->create([
    'projet' => 'My Project Name',
    'file' => '/path/to/my/file.json'
]);

// OR
$file = new File('/path/to/my/file.json');
$project = $apicilClientRegistry->getProject()->create([
    'projet' => 'My Project Name',
    'file' => $file
]);
```

#### createFromCustomerKnowledge(ConnaissanceClientProjet $projectCustomerKnowledge): ReponseProjetDto

```php
<?php

// Create or retrieve project customer knowledge
$projectCustomerKnowledge = new ConnaissanceClientProjet();

$project = $apicilClientRegistry->getProject()->createFromCustomerKnowledge($projectCustomerKnowledge);
```

#### createFromInvestmentProject(ProjetInvestissement $project): ReponseProjetDto

```php
<?php

// Create or retrieve investment project
$investmentProject = new ProjetInvestissement();

$project = $apicilClientRegistry->getProject()->createFromInvestmentProject($investmentProject);
```

#### get(int $id): ProjetInvestissementRetour

```php
<?php

$project = $apicilClientRegistry->getProject()->get(12);
```

#### list(array $search = []): ListProjet

```php
<?php

$project = $apicilClientRegistry->getProject()->list(["contratId" => 123456789]);
```

#### getBulletin(int $id): File

```php
<?php

$projectBulletin = $apicilClientRegistry->getProject()->getBulletin(12);
```

#### getDocuments(int $id, array $options = []): ListDocumentDto

```php
<?php

$projectBulletin = $apicilClientRegistry->getProject()->getDocuments(12);

// OR
$projectBulletin = $apicilClientRegistry->getProject()->getDocuments(12, [
    'estPayeurDiffSouscripteur' => true,
]);
```

#### remove(int $id): void

```php
<?php

$apicilClientRegistry->getProject()->remove(12);
```

#### sendSignatureByEmail(int $id): void

```php
<?php

$apicilClientRegistry->getProject()->sendSignatureByEmail(12);
```

#### sendSignatureBySms(int $id): void

```php
<?php

$apicilClientRegistry->getProject()->sendSignatureBySms(12);
```

#### sendToCustomer(int $id, EmailPropositionSouscriptionDto $email): void

```php
<?php

// Create or email proposal
$email = (new EmailPropositionSouscriptionDto())
    ->setContenu('Content')
    ->setLogo(
        (new LogoParamsDto())
            ->setExtensions('.png')
            ->setLargeurmax(1000)
            ->setTailleMax(1000)
    )
    ->setObjet('Project')
    ->setVendeurEnCopie(true)
;

$apicilClientRegistry->getProject()->sendToCustomer(12, $email);
```

#### update(int $id, array $options): ReponseProjetDto

```php
<?php
use Symfony\Component\HttpFoundation\File\File;

$project = $apicilClientRegistry->getProject()->create([
    'file' => '/path/to/my/file.json'
]);

// OR
$file = new File('/path/to/my/file.json');
$project = $apicilClientRegistry->getProject()->create([
    'file' => $file
]);
```
