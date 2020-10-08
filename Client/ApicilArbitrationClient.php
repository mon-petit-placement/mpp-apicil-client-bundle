<?php

namespace Mpp\ApicilClientBundle\Client;

use Mpp\ApicilClientBundle\Model\ActeRetourCreationDto;
use Mpp\ApicilClientBundle\Model\ArbitrageDto;
use Mpp\ApicilClientBundle\Model\ArbitrageDtoDeConsultation;
use Mpp\ApicilClientBundle\Model\DtoEligibilite;
use Mpp\ApicilClientBundle\Model\EmailPropositionActeDto;
use Mpp\ApicilClientBundle\Model\TelephoneDto;
use Mpp\ApicilClientBundle\OptionsResolver\ApicilAccClientOptionResolver;
use Symfony\Component\HttpFoundation\File\File;

class ApicilArbitrationClient extends AbstractApicilClientDomain implements ApicilArbitrationClientInterface
{
    /**
     * {@inheritdoc}
     */
    public function addDocument(int $id, string $documentCategory, array $options): ActeRetourCreationDto
    {
        $options = ApicilAccClientOptionResolver::resolveAddDocumentOptions($options);

        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'PUT', sprintf('/%s/document/%s', $id, $documentCategory), [
            'multipart' => [
                [
                    'name' => 'document',
                    'contents' => fopen($options['document'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function approveSecurityCode(array $options): ReponseClientHorsMursDto
    {
        return $this->requestAndPopulate(ReponseClientHorsMursDto::class, 'POST', '/codesecurite/valider', [
            'query' => ApicilReferentialClientOptionsResolver::resolveApproveSecurityCodeOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function approveSignature(int $id, string $otp)
    {
        $this->request('POST', sprintf('/%s/signature/%s', $id, $otp));
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $options): ActeRetourCreationDto
    {
        $options = ApicilReferentialClientOptionsResolver::resolveCreateOptions($options);

        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'POST', '/', [
            'query' => [
                'arbitrage' => $options['arbitrage'],
            ],
            'multipart' => [
                [
                    'name' => 'bulletin',
                    'contents' => fopen($options['bulletin'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function createFromModel(int $id, ArbitrageDto $arbitration)
    {
        $this->request('POST', '/asigner', [
            'body' => $this->serializer->serialize($arbitration, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function generateSecurityCode(array $options): array
    {
        $this->request('POST', '/codesecurite/generer', [
            'query' => ApicilReferentialClientOptionsResolver::resolveGenerateSecurityCodeOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function get(int $id): ArbitrageDtoDeConsultation
    {
        return $this->requestAndPopulate(ArbitrageDtoDeConsultation::class, 'GET', sprintf('/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getArbitrationFees(int $contractId): FraisArbitrageDto
    {
        return $this->requestAndPopulate(FraisArbitrageDto::class, 'GET', sprintf('/contrat/%s/tauxfrais', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function getBulletin(int $id): File
    {
        return $this->download('GET', sprintf('/%s/bulletin', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocument(int $id, int $documentId): RecuperationActeDocSousCategorieDto
    {
        return $this->requestAndPopulate(RecuperationActeDocSousCategorieDto::class, 'GET', sprintf('/%s/document/%s', $id, $documentId));
    }

    /**
     * {@inheritdoc}
     */
    public function getDocumentTypes(int $id): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', RecuperationActeDocSousCategorieDto::class), 'GET', sprintf('/%s/documents', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function getEmailTemplate(): EmailPropositionActeDto
    {
        return $this->requestAndPopulate(EmailPropositionActeDto::class, 'GET', '/mail/template');
    }

    /**
     * {@inheritdoc}
     */
    public function getErrors(int $id): array
    {
        return $this->requestAndPopulate(sprintf('%s[]', ErreurCodeFonctionnelDto::class), 'GET', '/erreurs');
    }

    /**
     * {@inheritdoc}
     */
    public function getInvestmentEligibleSupports(int $contractId, array $options): array
    {
        return $this->request('GET', sprintf('/support/investissement/%s', $contractId), [
            'query' => ApicilReferentialClientOptionsResolver::resolveGetInvestmentEligibleSupportsOptions($options),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function giveUp(int $id)
    {
        $this->request('POST', sprintf('/%s/abandonner', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function hasContract(int $contractId): OperationEnCoursDto
    {
        return $this->requestAndPopulate(OperationEnCoursDto::class, 'GET', sprintf('/contrat/%s/existe', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function isContractEligible(int $contractId): DtoEligibilite
    {
        return $this->requestAndPopulate(DtoEligibilite::class, 'GET', sprintf('/contrat/%s/eligible', $contractId));
    }

    /**
     * {@inheritdoc}
     */
    public function refuse(int $id, array $options = []): bool
    {
        $options = ApicilReferentialClientOptionsResolver::resolveRefuseOptions($options);

        $this->request('POST', sprintf('/%s/refuser', $id), [
            'query' => $options,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(int $id): bool
    {
        $this->requestAndPopulate('bool', 'DELETE', sprintf('/%s', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function removeDocument(int $id, string $documentId): bool
    {
        $this->requestAndPopulate('bool', 'DELETE', sprintf('/%s/document/%s', $id, $documentId));
    }

    /**
     * {@inheritdoc}
     */
    public function restart(int $id, array $options)
    {
        $options = ApicilReferentialClientOptionsResolver::resolveRestartOptions($options);

        $this->request('PUT', sprintf('/%s/relancer', $id), [
            'query' => $options,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function resume(int $id): ActeRetourCreationDto
    {
        return $this->requestAndPopulate(ActeRetourCreationDto::class, 'PUT', sprintf('/%s/reprendre', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function sendSignatureBySms(int $id)
    {
        $this->request('GET', sprintf('/%s/signature', $id));
    }

    /**
     * {@inheritdoc}
     */
    public function sendToCustomer(int $id, EmailPropositionActeDto $email)
    {
        $this->request('POST', sprintf('/%s/transmettre', $id), [
            'body' => $this->serializer->serialize($email, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function testEmail(int $id, EmailPropositionActeDto $email): bool
    {
        $this->request('POST', sprintf('/%s/mail/tester', $id), [
            'body' => $this->serializer->serialize($email, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function update(int $id, array $options): array
    {
        $options = ApicilReferentialClientOptionsResolver::resolveUpdateOptions($options);

        $this->request('PUT', sprintf('/%s', $id), [
            'multipart' => [
                [
                    'name' => 'bulletin',
                    'contents' => fopen($options['bulletin'], 'r'),
                ],
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updateFromModel(int $id, ArbitrationDto $arbitration): ArbitrationDto
    {
        return $this->requestAndPopulate(ArbitrationDto::class, 'PUT', sprintf('/asigner/%s', $id), [
            'body' => $this->serializer->serialize($email, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function updatePhoneNumber(int $id, TelephoneDto $phoneNumber)
    {
        $this->request('PUT', sprintf('/%s/telephone', $id), [
            'body' => $this->serializer->serialize($phoneNumber, 'json'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function verifySurveys(int $id, array $surveys): int
    {
        return $this->request('POST', sprintf('/%s/questionnaires', $id), [
            'body' => $this->serializer->serialize(
                ApicilReferentialClientOptionsResolver::resolveVerifySurveysOptions($surveys),
                'json'
            ),
        ])->getBody()->getContents();
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath(): string
    {
        return '/arbitrage';
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientDomainAlias(): string
    {
        return 'arbitration';
    }
}
